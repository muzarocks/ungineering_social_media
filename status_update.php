<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $ab_password = "ralphubuntu";
    $ab_name = "social_media";
    
    $conn = mysqli_connect($hostname, $username, $ab_password, $ab_name);
    if(!$conn){
        die("connection failed: " . mysql_connect_error());
    }
    
    $status = $_POST['status'];
    $date=date("Y/m/d");
    $time=date("h:m");
    $sql = "insert into posts(post, date_created, time_created)values('$status','$date','$time')";
    if(!mysqli_query($conn,$sql)){
        die("Error :".$sql."<br>".mysqli_error($conn));
    }
    echo "Status Update Sucessful";
    mysql_close($conn);
?>
