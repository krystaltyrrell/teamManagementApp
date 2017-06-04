<?php
    include('connect.php');
    $activityDate = $_REQUEST['activityDate'];
		$startTime = $_REQUEST['startTime'] . ":00";
		$endTime = $_REQUEST['endTime'] . ":00";
		$activityType= $_REQUEST['activityType'];
		$details = $_REQUEST['details'];
    $skater = $_REQUEST['skater'];

    $skaterArray = explode('|', $skater);
		$derbyId = $skaterArray[0];
		$derbyName = $skaterArray[1];

    $sql = "INSERT INTO activities (player_id, date, activity_type, details, start_time, end_time, points)
    VALUES ('$derbyId', '$activityDate', '$activityType', '$details', '$startTime', '$endTime', round((time_to_sec(timediff(end_time, start_time))/60) * .03))";
		
    
    $conn->exec($sql);
    $conn=NULL;
    include('logConfirmation.php');
?>
