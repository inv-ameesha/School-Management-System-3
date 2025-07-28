<?php
    session_start();
    session_unset();//remove all session variables
    session_destroy();//destro the session
    //clears the session cookie.gets the session name->set it to empty->set its expiration time to be 1 hr bfr ->clears it from the root path itslef
    setcookie(session_name(), '', time() - 3600, '/');
    header('location:index.php');
    exit();
?>