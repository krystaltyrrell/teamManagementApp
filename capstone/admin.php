<?php
    session_start();
    include('connect.php');
    if(isset($_SESSION['logged_in'])){
        $loggedIn = true;
    }else{
        $loggedIn = false;
    }

    if(!empty($_POST)){
        
        $user = $_POST['user'];
        $password = $_POST['pwd'];
        $stmt = $conn->prepare("SELECT * FROM admin WHERE user='$user' AND password='$password'"); 
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $results = $stmt->fetchAll();
        $success = false;
        foreach($results as $key => $users){
            $success = true;                    
        }               
        if($success){
            $loggedIn = true;
        }else{
            echo "Incorrect Login!";
					$hidemydiv = false;
        }
    }
    if($loggedIn){
        header('Location: adminDash.php');
    }
?>




<a class='btn btn-danger <?php echo $hidemydiv; ?>' href='logout.php'>Back</a>