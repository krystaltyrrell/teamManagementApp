<?php
    include('connect.php');
    $period_id = $_REQUEST['periodId'];

//print_r($_REQUEST);
    $sql = "DELETE FROM quota_periods WHERE quota_periods_id=$period_id";
    $conn->exec($sql);
    $conn = NULL;
    header('Location: quotaPeriods.php');
?>