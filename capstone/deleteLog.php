<?php
    include('connect.php');
    $activities_id = $_REQUEST['activities_id'];
    $sql = "DELETE FROM activities WHERE activities_id=$activities_id";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = NULL;
    header('Location: adminDash.php');
?>