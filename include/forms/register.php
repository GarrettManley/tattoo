<?php

	print_r($_POST);
	echo "<br>".$_POST['username']."<br>";


	function pdo_open_admin() {
		global $db;
		//define database informaiton
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
			echo "Connection Established";
		} catch(PDOException $e) {
			echo "Could not establish database connection.";
		}
	}

	global $db;
	pdo_open_admin();

	if(isset($_POST['register'])) {
		//hold number of errors in form
		$formError = 0;
		//initialize errorm essage
		//$e="";	
		
		//Check to see if username was filled out
		if(!empty($_POST['username'])) {
			$username = $_POST['username'];
		} else {
			$formError++;
			echo "<h4 class='text-center'>Missing username<h4>";
		}
		
		//Check to see if email was filled out
		if(!empty($_POST['email'])) {
			$email = $_POST['email'];
		} else {
			$formError++;
			echo "<h4 class='text-center'>Missing email<h4>";
		}
				
		//Check to see if password is entered
		if(!empty($_POST['password'])) {
			$password = $_POST['password'];
		} else {
			$formError++;
			echo "<h4 class='text-center'>Missing password<h4>";
		}

		//if there are any errors in the form, redisplay it and show error messages
		if($formError == 0) {
			$stmt = "INSERT INTO users (username,password,email) VALUES (:username,:password,:email)";
			$q = $db->prepare($stmt);
			$q->execute(array(	':username'=>$username,
								':password'=>$password,
								':email'=>$email));
			//redisplay the form with a message that the data entry is valid.
			echo "<h4 class='text-center'>Added user successfully<h4>";
			//addUserForm($e);
		}
	}

?>