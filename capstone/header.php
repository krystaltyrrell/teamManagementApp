<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin NRG Activity Tracker</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/afb7880540.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<div class="adminTop">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-1">
					<img src="img/NashvilleRollergirls.png" alt="nashville rollergirls logo" class="img-responsive center-block">
				</div>
				<div class="col-xs-12 col-sm-3 text-center">
					<h3>NRG Activity Tracker</h3></div>
				<div class="col-xs-12 col-sm-1 col-sm-push-7 text-center">
					<a href="logout.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i>&nbsp; logout</a>
				</div>
				<br>
			</div>
		</div>
		<br>
		<div class="row" role="navigation">
			<ul id="myTabs" class="nav nav-tabs">
				<li role="presentation" class="active">
					<a href="adminDash.php">Dash</a>
				</li>
				<li role="presentation">
					<a href="skaters.php">Skaters</a>
				</li>
				<li role="presentation">
					<a href="quotaPeriods.php">Quota Periods</a>
				</li>
				<li role="presentation">
					<a href="history.php">Log History</a></li>
			</ul>
		</div>
	</div>