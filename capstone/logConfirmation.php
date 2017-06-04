<?php
		$activityDate = $_REQUEST['activityDate'];
		$startTime = $_REQUEST['startTime'] . ":00";
		$endTime = $_REQUEST['endTime'] . ":00";
		$activityType= $_REQUEST['activityType'];
		$details = $_REQUEST['details'];
    $skater = $_REQUEST['skater'];

    $skaterArray = explode('|', $skater);
		$derbyId = $skaterArray[0];
		$derbyName = $skaterArray[1];
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Admin NRG Activity Tracker</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/afb7880540.js"></script>
		<script src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
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
					<!--use contact class-->
					<div class="formDiv">
						<div id="confirm">
							<h3>Your Activty Has Been Submitted</h3>
							<br>
							<h4>The quota manager has recieved the following information:</h4>
							<hr>
							<?php echo '<p><strong>'.$derbyName.'</strong></p><p>'.$activityType. '</p>
				<p>'.$details.'</p><p>'.$activityDate. '</p><p>'. $startTime. '-' .$endTime. '</p>' ?>
								<a class="btn btn-primary" href="index.php" role="button">Done</a>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!--	-->

	</body>

	</html>