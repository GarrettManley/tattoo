<?php

	session_start();

	function displayLogin ($msg, $username){
		echo $msg;
	}
	
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
	//check for submit
	if(isset($_POST['submit'])){
		//check if username and password strings are empty
		if(!empty($_POST['username'])&&!empty($_POST['password'])) {
			//start browser cache session
			session_start();
			
			//Check for session timeout, else initiliaze time
			if (isset($_SESSION['timeout'])) {	
				//Check Session Time for expiry
				//
				//Time is in seconds. 10 * 60 = 600s = 10 minutes
				if ($_SESSION['timeout'] + 30 * 60 < time()){
					session_destroy();
				}
			//initialize session variables as empty
			} else {
				$_SESSION['user']="";
				$_SESSION['pass']="";
				$_SESSION['dbUser']="";
				$_SESSION['dbPass']="";
				$_SESSION['timeout']=time();
			}
			
			//insert form variables
			$_SESSION['user']=strtolower(strip_tags($_POST['username']));
			$_SESSION['pass']=strip_tags($_POST['password']);
			
			//call database entry
			global $db;
			
			//start session
			pdo_open_admin();
			
			//look for username in form, limit ONE result for security
			$stmt = $db->prepare('SELECT username, password FROM users WHERE username = :username LIMIT 1');
			$stmt->bindParam(':username', $_SESSION['user']);
			//check to see if SQL statement returns results
			if($stmt->execute()) {
				//store username and password in array
				$userResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				//store username and hashed password
				$_SESSION['dbUser'] = strtolower($userResult[0]['username']);
				$_SESSION['dbPass'] = $userResult[0]['password'];	
				
				//check password entered matches the password from the datebase for that user
				if($_SESSION['pass'] == $_SESSION['dbPass']) {
					$msg = "<h3 class='text-center'>Login Successful</h3>";
					displayLogin($msg,$username);
					header('location: /index.php');
					echo "Success";
					die();
					
					}
				//redisplay if password not found
				 else {
					$msg = "<h3 class='text-center'>Password not found</h3>";
					$username = $_SESSION['user'];
					displayLogin($msg,$username);
				}
				
			//redisplay if user does not exist
			} else {
				$msg = "<h3 class='text-center'>Username not found</h3>";
				$username = "";
				displayLogin($msg,$username);			
			}
	
		//tell user to enter both fields
		} else {
			$msg = "<h3 class='text-center'>Please enter a username and password</h3>";
			$username = "";
			displayLogin($msg,$username);
		}
	}
?>