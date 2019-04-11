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
    if (empty($status)) {
        die('Enter some data first');
    }
    $datetime=date("d-m-y h:i:s ");
    
    $sql = "insert into posts(post, date_and_time,user_id)values('$status','$datetime',1)";
    if(!mysqli_query($conn,$sql)){
        die("Error :".$sql."<br>".mysqli_error($conn));
    }
    echo "Status Update Sucessful";
    $last_id = $conn->insert_id;
    echo "$last_id";
    mysql_close($conn);
?>
