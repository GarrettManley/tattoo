<?php

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
			//echo "Connection Established";
		} catch(PDOException $e) {
			//echo "Could not establish database connection.";
		}
	}

	//call database entry
	global $db;

	//start session
	pdo_open_admin();


	//create a new SQL query to select all members
	$stmt = $db->query('SELECT * FROM tattoos');
    
	//store all queried values as an associative array
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$rowCount = $stmt->rowCount();
    
	echo "
		<div class='item active'>
		<div class='row'>
	";

	foreach($results as $row) {
		$img_path = $row['filepath'];
		
		echo "
			<div class='col-md-3 thumb'>
				<a class='thumbnail' href='#'>
					<img class='img-responsive' src='" . $img_path . "' alt=''>
				</a>
			</div>
		";
		
	}

	echo "
		</div>
		</div>
	"
   
?>


