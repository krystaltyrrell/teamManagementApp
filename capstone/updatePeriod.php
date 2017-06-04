<?php
include('connect.php');
	$period_id = $_REQUEST['period_id']; 
	$update_period_name = $_REQUEST['period_name'];
	$update_start_date = $_REQUEST['start_date']; 
	$update_end_date = $_REQUEST['end_date']; 
	$update_available_points = $_REQUEST['available_points']; 
//print_r($_REQUEST);

$sql = "UPDATE quota_periods SET period_name='$update_period_name', start_date='$update_start_date', end_date='$update_end_date', total_available_points='$update_available_points' WHERE quota_periods_id='$period_id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
				header("location:quotaPeriods.php");
?>