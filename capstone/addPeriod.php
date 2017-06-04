<?php
   include('connect.php');
	$newPeriodName = $_REQUEST['newPeriodName']; 
	$newStartDate = $_REQUEST['newStartDate']; 
	$newEndDate = $_REQUEST['newEndDate']; 
	$newAvailablePoints = $_REQUEST['newAvailablePoints']; 
	

//print_r($_REQUEST);

    $sql = "INSERT INTO quota_periods (period_name, start_date, end_date, total_available_points)
    VALUES ('$newPeriodName', '$newStartDate', '$newEndDate','$newAvailablePoints')";
    $conn->exec($sql);
    $conn=NULL;
    header('Location: quotaPeriods.php');
?>
