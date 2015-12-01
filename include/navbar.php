<?php
	session_start();
?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" style="padding: 0px 0px" href="/inkhub">
				<img class="navbar-button"  style="margin-top: 7px; margin-right: 7px;" src="/inkhub/img/logoSmall.png" >
			</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar" style="margin-bottom:3px;">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse<span class="caret"></span></a>
						<ul class="dropdown-menu" style="padding:17px;border-top-width: 1px;margin-top: 3px;">
							<li class="dropdown-header">Categories</li>
							<li><a href="#">Abstract</a></li>
							<li><a href="#">Animals</a></li>
							<li><a href="#">Fantasy</a></li>
							<li><a href="#">Nature</a></li>
							<li><a href="#">Realistic</a></li>
							<li><a href="#">Tribal</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Location</li>
							<li><a href="#">Head</a></li>
							<li><a href="#">Chest</a></li>
							<li><a href="#">Back</a></li>
							<li><a href="#">Arms</a></li>
							<li><a href="#">Legs</a></li>
						</ul>
				</li>

			</ul>

			<!-- Upload Button -->
			<button type="button" class="btn btn-info navbar-btn" style="margin-left: 5px;" data-toggle="modal" data-target="#uploadModal"> <span class="glyphicon glyphicon glyphicon-cloud" aria-hidden="true"></span> Upload your tattoo!</button>

			<ul class="nav navbar-nav navbar-right">
				<!-- Displays login information if the user is not logged in -->
				<?php
					if(!isset($_SESSION['user'])){
						$path = $_SERVER['DOCUMENT_ROOT']."/inkhub/include/login.php";
						include_once($path);
					} else {
						echo "
							<li>
								<li class='dropdown'>
									<a class='dropdown-toggle' href='#' data-toggle='dropdown' id='navLogin'>
										Welcome ".$_SESSION['user']."!
									</a>
									<div class='dropdown-menu'>
										<a href='/inkhub/include/logout.php'>Logout</a>
									</div>
								</li>
							</li>
						";
					}
				?>
				<!-- Register Button -->
				<li>
					<a href="#" data-toggle="modal" data-target="#registerModal">Register</a>
				</li>



				<li>
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="q">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<!-- Registration Modal -->
<?php
	$path = $_SERVER['DOCUMENT_ROOT']."/inkhub/include/register.php";
	include_once($path);
	$path = $_SERVER['DOCUMENT_ROOT']."/inkhub/include/upload.php";
	include_once($path);
?>