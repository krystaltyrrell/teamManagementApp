<?php
    include('connect.php'); 
		session_start();
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>NRG Activity Tracker</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/afb7880540.js"></script>
		<script src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>

	<body class="indexBody">
		<div class="container-fluid" id="indexBg">
			<div class="row">
				<div class="col-xs-3  col-sm-2 ">
					<img src="img/NashvilleRollergirls.png" alt="nashville rollergirls logo" class="img-responsive center-block">
				</div>


				<!--^^	end of header area ^^-->

				<div class='col-xs-12 col-sm-6 col-sm-push-4 formDiv'>
					<div>
						<a id="loginlink" data-toggle="modal" href="#admin">Admin Login</a>
					</div>

					<form id="contact" action='logNewActivity.php' method='POST'>
						<h3>Log a New Activity</h3>
						<fieldset>
							<select name="skater" id="skater" tabindex="1" required>
								<option value="" disabled selected hidden>Select Your Derby Name</option>
								<?php
								 $stmt = $conn->prepare("SELECT * FROM skaters"); 
                        $stmt->execute();
                        // setting the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();
                        foreach($results as $key => $skater){
                            $derby_name = $skater['derby_name'];  
														$derby_id = $skater['id'];
                            echo '<option value="'.$derby_id.'|'.$derby_name.'">'.$derby_name.'</option>';                         
                        }
								?>
							</select>
						</fieldset>

						<fieldset>
							<select name="activityType" id="activityType" required>
								<option value="" disabled selected hidden>Select Activity Type</option>
								<?php
								 $stmt = $conn->prepare("SELECT type FROM activity_types"); 
                        $stmt->execute();
                        // set the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        $results = $stmt->fetchAll();
                        foreach($results as $key => $type){
                            $activity_type = $type['type'];                           
                            echo '<option value="'.$activity_type.'">'.$activity_type.'</option>';                         
                        } 
								?>

							</select>

						</fieldset>


						<fieldset>
							<label for="activityDate">Date of activity:</label>
							<input type="date" name="activityDate" id="activityDate" tabindex="2" required>
						</fieldset>

						<fieldset>
							<label for="startTime">Start Time:</label>
							<input type="time" name="startTime" id="startTime" tabindex="3" required>
						</fieldset>

						<fieldset>
							<label for="endTime">End Time:</label>
							<input type="time" name="endTime" id="endTime" tabindex="4" required>
						</fieldset>

						<fieldset>
							<textarea name="details" id="details" placeholder="Details...." tabindex="5"></textarea>
						</fieldset>


						<button type="submit">Submit</button>
						<button type="reset" value="reset" class="btn btn-default btn-xs">Clear</button>

					</form>
				</div>

			</div>
		</div>
		<!--^^	end of container-fluid^^-->



		<!--	ADMIN MODAL	-->
		<div class="modal fade" id="admin" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Admin Login</h4>
					</div>
					<div class="modal-body">
						<form method='post' action="admin.php">
							<div class="form-group">
								<label for="user">User:</label>
								<input name='user' type="text" class="form-control" id="user" value="admin">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input name='pwd' type="password" class="form-control" id="password">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	</body>

	</html>