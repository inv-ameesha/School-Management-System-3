<?php
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!==true ){
        die("Access denied <a href='index.php'>Login</a>");
    }
?>