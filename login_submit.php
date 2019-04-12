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
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from users where email='$email' and password='$password'";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
       die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    if(mysqli_num_rows($result)==0){
            echo "login failed";
    }
    while ($row=mysqli_fetch_array($result)) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        header('Location: homepageloggedin.html');
        exit;
    }
    mysqli_close($conn);
    
?>

