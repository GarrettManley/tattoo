<?php
	session_start();
/*
										<form class='form-horizontal' role='form' method='post' action='/inkhub/include/forms/like.php'>
										<h4>$likes People like this.</h4>
										<input type ='hidden' name='tattoo_id' value='" . $id . "'>
										<input id='like' name='like' type='submit' value='Like This Tattoo' class='btn btn-default'>
										</form>
*/
//Don't forget delimiters for triggers
/*
CREATE TRIGGER `saved_insert` AFTER INSERT ON `saved_tattoos`
 FOR EACH ROW UPDATE tattoos
SET tattoos.likes = tattoos.likes+1
WHERE tattoos.tattoo_id = new.tattoo_id
*/

/*
CREATE TRIGGER `saved_delete` AFTER DELETE ON `saved_tattoos`
 FOR EACH ROW UPDATE tattoos
SET tattoos.likes = (tattoos.likes-1)
WHERE tattoos.tattoo_id = old.tattoo_id
*/
	function pdo_open_admin() {
		global $db;
		//define database informaiton
		//$dsn = 'mysql:dbname=garrett_inkhub;host=localhost;';
		$dsn = 'mysql:dbname=inkhub;host=localhost;';
		//database username, this will need to be changed
		//$username = 'garrett_inkAdmin';
		$username = 'root';
		//database password, this will need to be changed
		//$password = 'inkhubpassword';
		$password = '';

		//attempt to open connection, if connection is not available then give an error
		try {
			$db = new PDO($dsn, $username, $password);
			//echo "Connection Established";
		} catch(PDOException $e) {
			//echo "Could not establish database connection.";
		}
	}

	//call database entry
	global $db;

	//start session
	pdo_open_admin();


	if(isset($_POST['like'])) {


		$user = $_SESSION['user'];
		$id = $_POST['tattoo_id'];
		
		//create a new SQL query that returns 1 if the row exists
		$stmt = $db->query("SELECT * FROM saved_tattoos WHERE (tattoo_id = '".$id."' AND username = '".$user."')");
    
		//get the rowcounty
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$rowCount = $stmt->rowCount();
/*
	foreach($results as $row) {
		$img_path = $row['filepath'];
		$id = $row['tattoo_id'];
		$submitter = $row['added_by'];
		$title = $row['title'];
		$description = $row['description'];
		$likes = $row['likes'];
		*/
		echo $rowCount;
		if($rowCount > 0){
			echo " entry exists";
			$stmt = "DELETE FROM saved_tattoos WHERE (tattoo_id = :tattoo_id AND username = :user)";
			$q = $db->prepare($stmt);
			$q->execute(array(':user'=>$user,
						':tattoo_id'=>$id));
						
		}else{
			$stmt = "INSERT IGNORE INTO saved_tattoos (username,tattoo_id) VALUES (:user,:tattoo_id)";
			$q = $db->prepare($stmt);
			$q->execute(array(':user'=>$user,
						':tattoo_id'=>$id));
		}
	header("Location: /inkhub/index.php");
	}

?>