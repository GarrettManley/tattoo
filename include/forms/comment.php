<?php
	session_start();

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


	if(isset($_POST['addComment'])) {
			
		$text = $_POST['comment'];
		$commenter = $_SESSION['user'];
		$id = $_POST['tattoo_id'];

		$stmt = "INSERT INTO comments (text,commenter,tattoo_id) VALUES (:text,:commenter,:tattoo_id)";
		$q = $db->prepare($stmt);
		$q->execute(array(	':text'=>$text,
						':commenter'=>$commenter,
						':tattoo_id'=>$id));
		//redisplay the form with a message that the data entry is valid.
		echo "<h4 class='text-center'>Added comment successfully<h4>";


		header("Location: /inkhub/index.php");	
	}

?>