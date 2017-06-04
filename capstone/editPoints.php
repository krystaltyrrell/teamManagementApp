<?php
include('connect.php');
    $player_id = $_REQUEST['player_id'];
		$ytd_points = $_REQUEST['ytd_points'];
    $new_points = $_REQUEST['new_points'];
		$edit_date = $_REQUEST ['edit_date'];
		$insert_points = $new_points - 	$ytd_points;


    $sql = "INSERT INTO activities (player_id, date, details, points, approved)
    VALUES ('$player_id','$edit_date', 'admin edit', '$insert_points', '1')";
		
    
    $conn->exec($sql);
    $conn=NULL;
    header('Location: skaters.php');

?>