<?php include('connect.php');
    $derby_delete_id = $_REQUEST['deleteId'];
    $sql = "DELETE FROM skaters WHERE id=$derby_delete_id";
    $conn->exec($sql);
    $conn = NULL;
    header('Location: skaters.php');
?>