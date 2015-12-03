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
    <link href="/inkhub/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/inkhub/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Recaptcha script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <!-- Navigation -->
	<?php
		$path = $_SERVER['DOCUMENT_ROOT']."/inkhub/include/navbar.php";
		include_once($path);
	?>
					
	<div class="panel panel-default" id="contentPanel">
		<div class="panel-heading"><h2 class="text-center">Tattoo Gallery</h2></div>
		<div class="panel-body">
			  
		<div id="myCarousel" class="carousel slide">
		  <!-- Indicators 
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>
		-->

    <!-- Page Content -->
    <div class="">
		
				  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
				
			<?php
				$path = $_SERVER['DOCUMENT_ROOT']."/inkhub/include/indexSlide.php";
				include_once($path);
			?>
			  
			</div>
			
			<!-- Left and right controls 
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		  -->
		</div>
		  

		  
		</div>
	</div>
        

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <p><small>Project for Dr. Wen-Ran Zhang's Distributed Web Systems Design class.</small></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
	
	<?php
		$path = $_SERVER['DOCUMENT_ROOT']."/inkhub/include/imgModal.php";
		include_once($path);
	?>

    <!-- jQuery -->
    <script src="/inkhub/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/inkhub/js/bootstrap.min.js"></script>

</body>

</html>