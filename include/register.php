<!-- Modal -->
<div id="registerModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="continer">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Register for InkHub!</h4>
						</div>
					</div>
				</div>
				<!--Modal Body -->
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form class='form-horizontal' role='form' method='post' action='/inkhub/include/forms/register.php'>
							<div class="modal-body">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="username">
								</div>
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								</div>
								<div class="form-group">
									<!--  <div class="g-recaptcha" data-sitekey="6Lcdxg8TAAAAAIo0NUYcEt5jnEBX40QgGUgI5gIP"></div>  -->
								</div>
							</div>
							<div class="modal-footer">
								<div class='row'>
									<input id='register' name='register' type='submit' value='Register' class='btn btn-primary'>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>