<?php
    require_once "../config/config.php";
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("location:admin_form.php");
    }else{
        
    }
?>