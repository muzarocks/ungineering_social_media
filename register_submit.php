<?php
    session_start();
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "muza123";
    $db_name = "social_media";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (name, email, password)
            VALUES('$name', '$email', '$password')";
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";
    header('Location: login.html');
    exit;
    mysqli_close($conn);
?> 
