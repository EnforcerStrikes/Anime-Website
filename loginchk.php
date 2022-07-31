<?php
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $main = 'main.php';
    $login = 'login.php';
  
    //Database Connection
    $conn = new mysqli("localhost","root","","whatsauce");
    if($conn->connect_error){
        die("Failed to connect : ".$conn->connect_error);
    } else {
        $stmt = $conn->prepare("select * from registration where emailid = ?");
        $stmt->bind_param("s", $emailid);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                echo "<h1>Login Successfully</h1> \n";
                echo "<a href = '$main'>Click here to continue</a>";
            }else{
                echo "<h1>Invalid Email or Password</h1>";
                echo "<a href = '$login'>Click here to try again!!</a>";
            }
        } 
    }
?>