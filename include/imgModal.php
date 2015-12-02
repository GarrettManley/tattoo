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
							<div class='row'>
								<div class = 'modal-body'>
									<div class='col-md-10 col-md-offset-1 text-center'>
										<img class='img-responsive' src='" . $img_path . "' alt=''>
										<h6>Posted By: " . $submitter . "</h6>
										<hr>
										<p>" . $description . "</p>
									</div>
								</div>
							</div>
							<div class='modal-footer'>
								<div class='row'>
									<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		";
	}
?>