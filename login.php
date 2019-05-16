<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
           header("Location: home.php");
    }
?>
<html>
    <head>
        <title>Login page</title> 
        <link rel="stylesheet" href="/social_media/css/login.css">
    </head>
    <body>
        <div class="left">
            <div class="div1"></div>
            <div class="div2">
                <div class="col1">
                    <img src="img/ungineering_logo.svg" alt="ungineering logo">
                </div>
                <div class="col2">
                    <div class="heading"><span>un</span>gineering</div>
                    <div class="separator"></div>
                    <label>A<span> bit </span> of knowledge is good.</label><br>
                    <label id="extra">A<span> byte </span> is better</label>
                </div>
            </div>
            <div class="div4">
                <label>Existing User</label><br>
                <label>Log-in</label>
            </div>
            <div class="div5">
                <a href="register.php">New User Create Account</a>
            </div>  
        </div>
        <div class="right">
            <div class="login">
                <p>Log-in</p>
            </div>
            <form action="login_submit.php" method="POST">
                <div class="email">
                    <div class="col3"><label for="email">Email</label></div>
                    <div class="col4"><input type="text" name="email" required id="email"></div>
                </div>
                <div class="password">
                    <div class="col3"><label for="password">Password</label></div>
                    <div class="col4"><input type="password" name="password" required id="password"></div>
                </div>
                <div class="submit">
                   <div class="col3"><label></label></div>
                    <div class="col4"><input type="submit" name="submit" value="Log-in"></div>
                </div>
                
            </form>
            <div class="outer">
                <div class="col3"></div>
                <div class="col4">
                    <a href="register.html">New User Create Account</a>
                </div>
            </div>
        </div>
    </body>
</html>
