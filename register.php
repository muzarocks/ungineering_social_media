<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
           header("Location: homepageloggedin.php");
    }
?>

<html>
    <head>
        <title>Registration page</title> 
        <link rel="stylesheet" href="/social_media/css/register.css">
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
                <label>New User</label><br>
                <label>Create</label><br>
                <label>Account</label>
            </div>
            <div class="div5">
                <a href="login.php">Existing User Log-in</a>
            </div>  
        </div>
        <div class="right">
            <div class="create-ac">
                <p>Create Account</p>
            </div>
            <form action="register_submit.php" method="POST">
                <div class="name">
                    <div class="col3"><label for="name">Name</label></div>
                    <div class="col4"><input type="text" name="name" required id="name"></div>
                </div>
                <div class="email">
                    <div class="col3"><label for="email">Email</label></div>
                    <div class="col4"><input type="text" name="email" required id="email"></div>
                </div>
                <div class="password">
                    <div class="col3"><label for="password1">Password</label></div>
                    <div class="col4"><input type="password" name="password" required id="password1"></div>
                </div>
                <div class="password">
                    <div class="col3"><label for="password2">Password</label></div>
                    <div class="col4"><input type="password" name="password" required id="password2"></div>
                </div>
                <div class="submit">
                   <div class="col3"><label></label></div>
                    <div class="col4"><input type="submit" name="submit" value="Create Account"></div>
                </div>
            </form>
            <div class="outer">
                <div class="col3"></div>
                <div class="col4">
                    <a href="login.php">Existing User Log-in</a>
                </div>
            </div>
        </div>
    </body>
</html>
