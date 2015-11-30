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
			echo "Connection Established";
		} catch(PDOException $e) {
			echo "Could not establish database connection.";
		}
	}

	session_start();

	//call database entry
	global $db;
			
	//start session
	pdo_open_admin();

	if(isset($_POST['upload'])) {

		//initialize form variables
		$title = $_POST['title'];
		$description = $_POST['description'];
		$nsfw = $_POST['nsfw'];
		$location = $_POST['location'];
		
		$stmt = $db->query('SELECT tattoo_id FROM tattoos ORDER BY tattoo_id DESC LIMIT 1');
		$tattooIDResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($tattooIDResult as $row) {
			$tattoo_id = ($row['tattoo_id'] + 1);
		}
		 

		//set directory for image upload
		$target_dir = $_SERVER['DOCUMENT_ROOT']."/img/tattoos/";
		
		echo ($_FILES["tattoo_img"]["name"]);

		//image upload logic
		if(!empty($_FILES["tattoo_img"]["name"])){

			//get member name, put to lower case, replace spaces with underscores
			$filename = strtolower($_SESSION['user']) . $tattoo_id . "." . pathinfo(basename($_FILES["tattoo_img"]["name"]),PATHINFO_EXTENSION);
			//real location
			$target_file = $target_dir . $filename;
			//create relative image path
			$relImgPath = "/img/tattoos/" . $filename;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is an actual image or fake image
				$check = getimagesize($_FILES["tattoo_img"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "<br />File is not an image.";
					$uploadOk = 0;
				}
			// Check file size
			if ($_FILES["tattoo_img"]["size"] > 4092000) {
				echo "<br />Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "<br />Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "<br />Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["tattoo_img"]["tmp_name"], $target_file)) {
					echo "<br />The file ". $filename . " has been uploaded.";
				} else {
					echo "<br />Sorry, there was an error uploading your file.";
				}
			}		
		} else {
			echo "Please enter an image to upload";
		}

		$stmt = "INSERT INTO tattoos (tattoo_id, added_by, location, nsfw, filepath, title, description) VALUES (:tattoo_id, :added_by, :location, :nsfw, :filepath, :title, :description)";
			$q = $db->prepare($stmt);
			$q->execute(array(	':tattoo_id'=>$tattoo_id,
								':added_by'=>$_SESSION['user'],
							  	':location'=>$location,
							  	':nsfw'=>$nsfw,
							  	':filepath'=>$relImgPath,
							  	':title'=>$title,
								':description'=>$description));
			//redisplay the form with a message that the data entry is valid.
			header("Location: /index.php");
	}
		
?>