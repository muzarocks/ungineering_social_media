<?php
    $hostname = "localhost";
    $username = "root";
    $db_password = "ralphubuntu";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM posts where user_id="1" order by id desc';

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }  
    while ($row=mysqli_fetch_array($result)) {
        echo $row['post'] . "<br/>";
    }
    
    $no_of_rows=mysqli_num_rows ( $result );
    for ($i=0; $i <$no_of_rows ; $i++) { 
        
        while ($row=mysqli_fetch_array($result)) {
            echo $row['post'] ;
            echo $row['date_and_time'];
        }

        $sql_owner='SELECT * FROM users where id="1"';

        $result2 = mysqli_query($conn, $sql_owner);
        if (!$result2) {
            die("Error: " . $sql_owner . "<br>" . mysqli_error($conn));
        }
        while ($row2=mysqli_fetch_array($result2)) {
            echo $row2['name'] . "<br/>";
        }
    }

    mysqli_close($conn);
?>
