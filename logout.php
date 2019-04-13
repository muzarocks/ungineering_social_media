<?php
	session_start();
	if($_SESSION['loggedin']==true)
	{
		session_destroy(); 
		header("location:homepageloggedin.php?msg=Successfully Logged out");
	}
	header("location:homepageloggedin.php");
?>