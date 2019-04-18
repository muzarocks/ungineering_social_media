<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $ab_password = "ralphubuntu";
    $ab_name = "social_media";
    
    session_start();
    $userid_loggedin=$_SESSION['id'];

    $conn = mysqli_connect($hostname, $username, $ab_password, $ab_name);
    if(!$conn){
        die("connection failed: " . mysql_connect_error());
    }
        
    //$id=$POST_['userid'];
    //echo $userid_loggedin;
    $status = $_POST['status'];
    if (empty($status)) {
        die('Enter some data first');
    }
    $datetime=date("d-m-y h:i:s ");
    
    
    
    $sql = "insert into posts(post, date_and_time,user_id)values('$status','$datetime','$userid_loggedin')";
    if(!mysqli_query($conn,$sql)){
        die("Error :".$sql."<br>".mysqli_error($conn));
    }
    echo "Status Update Sucessful";
    header('Location: homepageloggedin.php');
    mysql_close($conn);
?>
