<?php
//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//
//    try {
//        $conn = new PDO("mysql:host=$servername;dbname=rollergirls", $username, $password);
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//        }
//    catch(PDOException $e)
//        {
//        echo "Connection failed: " . $e->getMessage();
//        }


$servername = "localhost";
    $username = "ktyrrell_admin";
    $password = "d310cupcake";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=ktyrrell_rollergirls", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }


?>
