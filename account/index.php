<!-- NEED TO CHECK IF A USER IS LOGGED IN, IF NOT REDIRECT TO A LOGIN PAGE -->



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InkHub</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/custom.css" rel="stylesheet">

</head>

<body>
    <!-- Navigation -->
	<?php
		$path = $_SERVER['DOCUMENT_ROOT']."/include/navbar.php";
		include_once($path);
	?>
	
	
	<!-- Registration Modal -->
	<?php
		$path = $_SERVER['DOCUMENT_ROOT']."/include/register.php";
		include_once($path);
	?>

    <!-- User Page -->
	
	<div class="container panel" style="width:90%;">
	
		<div class="page-header">
            <h1>User Page</h1>
        </div>
	
	    <div class="row panel">
			<div class="col-sm-4">
				<img class="img-responsive" src="img/hqdefault.jpg" alt="">
			</div>
			
			<div class="col-sm-16">	
				<h3>About me:</h3>
				<p>This is where the user information will go. This is a lot of information
				as a test to see if there is a limit to how much the user can enter in this slot.</p>
			</div>
			
		</div>
		
		<div class="page-header">
				<h1>User's Favorite Tattoos</h1>
			</div>
			
		<div class="row panel">
			
			
				
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/tattoo_5.jpg" alt="">
                </a>
			</div>
			
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                <img class="img-responsive" src="img/tattoo_4.jpg" alt="">
                </a>
			</div>
			
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                <img class="img-responsive" src="img/tattoo_11.jpg" alt="">
                </a>
			</div>
			
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                <img class="img-responsive" src="img/tattoo_11.jpg" alt="">
                </a>
			</div>
			
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                <img class="img-responsive" src="img/tattoo_11.jpg" alt="">
                </a>
			</div>
			
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                <img class="img-responsive" src="img/tattoo_11.jpg" alt="">
                </a>
			</div>
			
		</div>
	
	</div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p><small>Project for Dr. Wen-Ran Zhang's Distributed Web Systems Design class.</small></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>