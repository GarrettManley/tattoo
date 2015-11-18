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
    <link href="/css/thumbnail-gallery.css" rel="stylesheet">
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

    <!-- Page Content -->
    <div class="container" style="width:40%;">
		
		<div class="panel panel-default" style="margin-bottom: 5px;">
			  <div class="panel-heading"><div class="panel-heading text-center"><h1> Tattoo Title </h1></div></div>
			  <div class="panel-body">
				
					<img src="/img/tattoo_13.jpg" class="center-block img-responsive img-thumbnail" alt="Responsive image">
				
			  </div>
		</div>
		
		<button class="btn btn-primary" style="margin-bottom: 5px;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Details
		</button>
		
		<!-- Collapsible description area -->
		<div class="collapse" id="collapseExample">
		  <div class="well">
		  <ul class="list-inline" style="margin-bottom: 0px;">
		  
			  <!--like button -->
			<li>
				<button type="button" class="btn btn-default" style="vertical-align: text-bottom;">
						<span class="glyphicon glyphicon-thumbs-up" title="Like this tattoo!" aria-hidden="true"></span>
				</button>
			</li>
			
			<li>
				<!-- Username -->
				<ul class="list-unstyled">
				  <li>
					  <a href="#"><small> Username </small></a>
				  </li>
				  
				  <!-- Description -->
				  <li>
					  <p>Tattoo description</p>
				  </li>
				</ul>
			</li>
		</ul>
			

		  </div>
		</div>
		
		<ul class="list-group">
		  <li class="list-group-item">
			  <p style="font-size:smaller"><a href=#>AccountName1 </a> 4:24 PM 10/27/15 </p>
			  <p>This ia a comment! </p>
		  </li>
		  <li class="list-group-item">
			  <p style="font-size:smaller"><a href=#>AccountName2 </a> 4:24 PM 10/27/15 </p>
			  <p>This is also a comment! </p>
		  </li>
		  <li class="list-group-item">
			  <p style="font-size:smaller"><a href=#>AccountName3 </a> 4:24 PM 10/27/15 </p>
			  <p>Comment Comment Comment </p>
		  </li>
		  <li class="list-group-item">
			  <p style="font-size:smaller"> <a href=#>AccountName4 </a> 4:24 PM 10/27/15 </p>
			  <p>Hello Hello Hello </p>
		  </li>
		  <li class="list-group-item">
			  <p style="font-size:smaller"><a href=#>AccountName5 </a> 4:24 PM 10/27/15 </p>
			  <p>This is a comment </p>
		  </li>
		</ul>
       

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