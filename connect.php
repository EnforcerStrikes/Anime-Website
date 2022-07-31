<?php
    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    //$gender = $_POST['gender'];
    $age = $_POST['age'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $main = 'main.php';

    //Database Connection
    $conn = new mysqli('localhost','root','','whatsauce');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(username, emailid, age, phonenumber, password) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss",$username, $emailid, $age, $phonenumber, $password); 
        $stmt->execute();
        echo "<h1>Registration Successfully</h1>";
        echo "<a href = '$main'>Click here to continue</a>";
        $stmt->close();
        $conn->close();
    }
?>