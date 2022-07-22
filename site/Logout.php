<?php
	session_start();
	if(isset($_SESSION['userID']))
	{
            unset($_SESSION['userID']);
            header("location: Home.php");
            exit();
	}else {
            header("location: Home.php");
            exit();
	}
?>