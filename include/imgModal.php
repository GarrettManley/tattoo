<?php
	//call database entry
	global $db;

	//start session
	pdo_open_admin();


	//create a new SQL query to select all members
	$stmt = $db->query('SELECT * FROM tattoos');
    
	//store all queried values as an associative array
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$rowCount = $stmt->rowCount();

	foreach($results as $row) {
		$img_path = $row['filepath'];
		$id = $row['tattoo_id'];
		$submitter = $row['added_by'];
		$title = $row['title'];
		$description = $row['description'];
		$likes = $row['likes'];
		
		//get comments for that tattoo
		$commStmt = $db->query('SELECT * FROM comments WHERE tattoo_id = ' . $id . '');
		$commResults = $commStmt->fetchAll(PDO::FETCH_ASSOC);
		$commRowCount = $commStmt->rowCount();
		
		echo "
			<!-- Modal -->
			<div id='" . $id . "' class='modal fade' role='dialog'>
				<div class='modal-dialog'>
					<div class='continer'>
						<!-- Modal content-->
						<div class='modal-content'>
							<div class='row'>
								<div class='col-md-10 col-md-offset-1'>
									<div class='modal-header'>
										<button type='button' class='close' data-dismiss='modal'>&times;</button>
										<h3 class='modal-title'>" . $title . "</h3>
									</div>
								</div>
							</div>
							<!--Modal Body -->
							<div class='modal-body'>
								<div class = 'row'>
									<div class='col-md-10 col-md-offset-1 text-center'>
										<img class='img-responsive' src='" . $img_path . "' alt=''>
										<hr>
										<h6>Posted By: " . $submitter . "</h6>
											<form class='form-horizontal' role='form' method='post' action='/inkhub/include/forms/like.php'>
											<h4> $likes People like this.</h4>";
											if(isset($_SESSION['user'])){
											echo "	
											<input type ='hidden' name='tattoo_id' value='" . $id . "'>
											<input id='like' name='like' type='submit' value='Like This Tattoo' class='btn btn-default'>
											</form>
											";
										}
										echo "<hr>
										<h4>Description</h4>
										<p>" . $description . "</p>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-10 col-md-offset-1'>
										<h4>Comments</h4>
										<hr>
									</div>";
		
							if(isset($_SESSION['user'])){
								echo "
									<form class='form-horizontal' role='form' method='post' action='/inkhub/include/forms/comment.php'>
										<div class='row'>
											<div class='col-md-8 col-md-offset-2'>
												<div class='form-group'>
													<textarea class='form-control' rows='4' name='comment' id='comment' placeholder='Comment...'></textarea>
												</div>
											</div>
										</div>
										<div class='row'>
											<div class='col-md-1 col-md-offset-1'>
												<input type ='hidden' name='tattoo_id' value='" . $id . "'>
												<input id='addComment' name='addComment' type='submit' value='Comment' class='btn btn-primary'>
											</div>
										</div>
									</form>";
							}
							echo "</div>";
								
							foreach($commResults as $row) {
								echo "
									<div class='row'>
										<div class='col-md-10 col-md-offset-1'>
											<hr>
											<h4>" . $row['commenter'] . " says:</h4>
											<p>" . $row['text'] . "</p>
										</div>
									</div>
								";
							}
		echo "					
							</div>
							<div class='modal-footer'>
								<div class='row'>
									<div class='col-md-1 col-md-offset-9'>
										<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		";
		
	}
?>