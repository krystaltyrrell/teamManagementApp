<?php
include('connect.php');
	$id = $_REQUEST['derbyId'];
	$derby_name = $_REQUEST['derbyName']; 
	if($_REQUEST['activeStatus'] == "on"){
		$is_active=1;
}
else{
    $is_active =0;
}

//print_r($_REQUEST);
//var_dump($is_active);

$sql = "UPDATE skaters SET derby_name='$derby_name', active='$is_active' WHERE id='$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
				header("location:skaters.php");
?>