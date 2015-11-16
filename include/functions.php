<?php
	function pdo_open_admin() {
		global $db;
		//define database informaiton
		$dsn = 'mysql:dbname=garrett_inkhub;host=localhost;';
		//database username, this will need to be changed
		$username = 'garrett_inkAdmin';
		//database password, this will need to be changed
		$password = 'inkhubpassword';

		//attempt to open connection, if connection is not available then give an error
		try {
			$db = new PDO($dsn, $username, $password);
		} catch(PDOException $e) {
			echo "Could not establish database connection.";
		}
	}
?>