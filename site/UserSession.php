<?php
    require_once 'config.php';
    if(is_numeric($_SESSION['userID']))
    {
        
    }else {
        header("location: ../../LoginPage.php");
        exit();
    }
