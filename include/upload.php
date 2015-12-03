<!-- Upload Modal -->
<div id="uploadModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="continer">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Upload Tattoo!</h4>
						</div>
					</div>
				</div>
				<!--Modal Body -->
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form class='form-horizontal' role='form' method='post' action='/inkhub/include/forms/upload.php' enctype='multipart/form-data'>
							<div class="modal-body">
								<!-- Title -->
								<div class="form-group">
									<label for="title">Title</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Title">
								</div>
								<!-- Description -->
								<div class="form-group">
									<label for="description">Description</label>
									<textarea class="form-control" rows="4" name="description" id="description" placeholder="Tattoo Description"></textarea>
								</div>
								<!-- nsfw -->
								<div class="form-group">
									<label for="nsfw">NSFW?</label>
									<input type="checkbox" class="form-control" id="nsfw" name="nsfw">
								</div>
								<!-- location -->
								<div class="form-group">
									<label for="location">Body Position</label>
									<select name="location" class="form-control">
										<option value="Head">Head</option>
										<option value="Chest">Chest</option>
										<option value="Back">Back</option>
										<option value="Arms">Arms</option>
										<option value="Legs">Legs</option>
									</select>
								</div>
								<!-- image upload -->
								<div class="form-group">
									<label for="tattoo_img">Tattoo</label>
									<input type="file" name="tattoo_img" id="tattoo_img">
								</div>
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="6Lcdxg8TAAAAAIo0NUYcEt5jnEBX40QgGUgI5gIP"></div>
								</div>
							</div>
							<div class="modal-footer">
								<div class='row'>
									<input id='upload' name='upload' type='submit' value='Upload' class='btn btn-primary'>
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