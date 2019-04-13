<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styleloggedinhome.css"/>
        <link rel="stylesheet" href="css/styleloggedinhome2.css"/>

        <title>HomePage</title>
    <head>
    
    <body>
        <div class="row rowtop">
        
            <div class="col col1">
      
                <img src="img/ungineering_logo.svg" alt="ungineering_logo"  width="125" height="65" align="right"/>
 
            </div>

            <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    $flag=1;
                    $userid_loggedin=$_SESSION['id'];
                    $user_loggedin=$_SESSION['name'];
                    
                }
                else
                    $flag=0;
            ?>
            
            <div class="col tag">
               <div class="row up"></div>
               <div class="row down">
                <div class="row textup">
                        <b>
                            <span class="text_un">un</span>
                            <span class="text_gineering">gineering</span>        
                        </b>
                </div>
                <div class="row textdown">
                    <p class="tagline"> A <span style="color: red">bit </span>of knowledge is good</p><br/>
                    <p class="two"> A <span style="color: red">byte</span> is better</p>
                </div>
               </div>

            </div>
            
            <div class="col col2">
                <div class="row row1"></div>
                <div class="row row2">
                    <?php
                        if($flag==0)
                        {
                    ?>
                        <button class="login"><a href="login.php">Login</a></button>
                    <?php
                        }
                        else {
                    ?>
                            <button class="dash">My Dashboard</button>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <div class="col col3">
            
                <div class="row row1"></div>
            
                <div class="row row2">
                    <?php
                        if($flag==1)
                        {
                    ?>
                        <div class="col b">
                            <button class="logout"><a href="logout.php">Logout</a></button>
                        </div>
                    <?php
                        }
                        else {
                    ?>
                        <div class="col b">
                            <button class="new"><a href="register.php">New User</a></button>
                        </div>
                    <?php
                        }
                    ?>
                    

                </div>
            </div>

        </div>
        
<?php
    $flag=1;
    if($flag==1)
    {
?>    
        <div class="upper">        
            <div class="row r1">
                <div class="col t1">
                </div>
                <div class="col t2">
                    <div class="write">
                    <br/><span class="writetxt"><b>Write something here</b></span>
                    </div>  
                </div>
                <div class="col t3">
                </div>   
            </div>    
            <div class="row r2">
                 <div class="col s1">
                 </div>
                 <div class="col s2">
                    <div class="box statusbox">
                        <div class="status_update">
                            <form method ="post" action = "status_update.php">
                            <textarea class="status" name="status"></textarea>
                            <input type="hidden" name="userid" value=<?php echo $userid_loggedin; ?>>
                            <input type= "submit" name = "submit" value = "submit"/>    
                        </div>
                    </div>  
                 </div>
                <div class="col s3">
                </div>  
            </div>        
            <div class="row r3">
                <div class="col submits">
                </div>
                <div class="col submits2">
                    <button class="submit" >Submit</button>
                </div>
                <div class="col submits">
                </div> 
            </div>      
        </div>          
<?php
    }
?>   
<?php
    $hostname = "localhost";
    $username = "root";
    $db_password = "ralphubuntu";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM posts where user_id="1" ORDER BY id desc ';

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    $no_of_rows=mysqli_num_rows ( $result );

    for ($i=0; $i <$no_of_rows ; $i++) { 

        $sql_owner='SELECT * FROM users where id="1"';
        $result2 = mysqli_query($conn, $sql_owner);
        if (!$result2) {
            die("Error: " . $sql_owner . "<br>" . mysqli_error($conn));
        }
        while ($row2=mysqli_fetch_array($result2)) {
            $user_name=$row2['name'];
        }
        
        while ($row=mysqli_fetch_array($result)) {
            $user_post=$row['post'] ;
            $time=$row['date_and_time'];
            ?>
            <div class="lower">
            <div class="row stat">
                <div class="col x1">
                </div>
            
                <div class="col x2">
                    <div class="box stats">
                        <b><?php
                                echo $user_name;
                            ?></b>
                        <p class="par">
                            <?php
                                echo $user_post;
                            ?>
                        <br/>
                        <p class="time">
                           <h5>Time: <?php
                                echo $time;
                            ?></h5>
                        </p>
                    </div>  
                </div>
            
                <div class="col x3">
                </div>          
            </div> 
        </div>
        <?php
        }

        $sql_owner='SELECT * FROM users where id="1"';

        $result2 = mysqli_query($conn, $sql_owner);
        if (!$result2) {
            die("Error: " . $sql_owner . "<br>" . mysqli_error($conn));
        }
        while ($row2=mysqli_fetch_array($result2)) {
            $user_name=$row2['name'];
        }
    }

    mysqli_close($conn);
?>         
    </body>
</html>




