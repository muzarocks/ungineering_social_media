<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styleloggedinhome.css"/>
        <link rel="stylesheet" href="css/styleloggedinhome2.css"/>
    <head>
    
    <body>
        <div class="row rowtop">
        
            <div class="col col1">
      
                <img src="img/ungineering_logo.svg" alt="ungineering_logo"  width="125" height="65" align="right"/>
 
            </div>
            
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
                        $flag2=1;
                        if($flag2==0)
                        {
                    ?>
                        <button class="login">login</button>
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
                        $flag2=1;
                        if($flag2==1)
                        {
                    ?>
                        <div class="col b">
                            <button class="logout">Logout</button>
                        </div>
                    <?php
                        }
                        else {
                    ?>
                        <div class="col b">
                            <button class="new">New User</button>
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
        <div class="lower">
            <div class="row stat">
                <div class="col x1">
                </div>
            
                <div class="col x2">
                    <div class="box stats">
                        <b>Name</b>
                        <p class="par">
                        my name is julia montigue. I used to Home Misnister of this country.Because of some traitors i had to sacrifice my life.my                  name is julia montigue. I used to Home Misnister of this country.Because of some traitors i had to sacrifice my life.<br/>
                        <p class="time">Time:11.40Hrs IST |20 APR</p>
                      </p>
                    </div>  
                </div>
            
                <div class="col x3">
                </div>          
            </div>
            
            
         
        </div>
    </body>
</html>