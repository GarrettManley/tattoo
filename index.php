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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

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
		$path = $_SERVER['DOCUMENT_ROOT']."/include/navbar.php";
		include_once($path);
	?>

	<!-- Registration Modal -->
	
					<!-- Modal -->
					<div id="registerModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Register for InkHub!</h4>
						  </div>
						  <!--Modal Body -->
						  <div class="modal-body">
							<form>
							  <div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							  <div class="g-recaptcha" data-sitekey="6Lcdxg8TAAAAAIo0NUYcEt5jnEBX40QgGUgI5gIP"></div>
							  <button type="submit" class="btn btn-default">Submit</button>
							</form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<!-- Upload Modal -->
					<div id="uploadModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Upload your tattoo</h4>
						  </div>
						  <!--Modal Body -->
						  <div class="modal-body">
							<form>
							
							<!-- Title Field -->
							  <div class="form-group">
								<label for="tattooTitle">Title</label>
								<input type="text" class="form-control" id="tattooTitle" placeholder="Enter a Title for your submission.">
							  </div>
							  
							  <!-- Description Field -->
							<div class="form-group">
								<label for="tattooDescription">Description</label>
								<input type="text" class="form-control" id="tattooDescription" placeholder="Enter a description for your submission.">
							  </div>
							  
							  <div class="form-group">

							<!-- Category button -->
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Category <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
								<li><a href="#">Abstract</a></li>
								<li><a href="#">Animals</a></li>
								<li><a href="#">Fantasy</a></li>
								<li><a href="#">Nature</a></li>
								<li><a href="#">Realistic</a></li>
								<li><a href="#">Tribal</a></li>
							  </ul>
							</div>
							
							 <div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
							  </div>
  
							</div>
							  
							
							  <div class="g-recaptcha" data-sitekey="6Lcdxg8TAAAAAIo0NUYcEt5jnEBX40QgGUgI5gIP"></div>
							  <button type="submit" class="btn btn-default">Submit</button>
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</form>
						  </div>
						  <div class="modal-footer">
							
						  </div>
						</div>

					  </div>
					</div>
	
	<div class="panel panel-default" id="contentPanel">
		<div class="panel-heading"><h2 class="text-center">Popular Tattoos</h2></div>
		<div class="panel-body">
			  
		<div id="myCarousel" class="carousel slide">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
				
				<!-- Slide 1 -->
				<div class="item active">
				  
				  <div class="row">
					

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_1.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_2.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_3.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_4.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_5.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_6.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_7.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_8.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_9.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_10.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_11.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_12.jpg" alt="">
							</a>
						</div>
					</div>

					
				</div>
				
				<!-- slide 2 -->
				<div class="item">
				  				  
				  <div class="row">
					

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_1.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_2.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_3.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_4.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_5.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_6.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_7.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_8.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_9.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_10.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_11.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_12.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
				
				<!-- slide 3 -->
				<div class="item">
				  				  <div class="row">
					

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_1.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_2.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_3.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_4.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_5.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_6.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_7.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_8.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_9.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_10.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_11.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_12.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
				
				<!-- slide 4 -->
				<div class="item">
				  				  <div class="row">
					

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_1.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_2.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_3.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_4.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_5.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_6.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_7.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_8.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_9.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_10.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_11.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							<a class="thumbnail" href="#">
								<img class="img-responsive" src="img/tattoo_12.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			
			</div>
			
			<!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		  
		</div>
		  

		  
		</div>
	</div>
    <!-- Page Content -->
    <div class="container">
		
		<!-- Thumbnails -->
        

        <hr>

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