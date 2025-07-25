<?php
    session_start();
    session_unset();//remove all session variables
    session_destroy();//destro the session
    header('location:index.php');
    exit();
?>