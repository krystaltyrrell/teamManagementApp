<?php
   include('connect.php');
	$newSkaterName = $_REQUEST['newSkaterName']; 
	if(isset($_REQUEST['active'])){
		$is_active=1;
}
else{
    $is_active =0;
}

//print_r($_REQUEST);
//var_dump($is_active);
//die();

    $sql = "INSERT INTO skaters (derby_name, active)
    VALUES ('$newSkaterName', '$is_active')";
    $conn->exec($sql);
    $conn=NULL;
    header('Location: skaters.php');
?>
