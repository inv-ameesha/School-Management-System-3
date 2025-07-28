<?php
    session_start();
    //main no-cache rule.no-store - don't store anything in cache , no-cache:browser must check with server before processing ,must-revalidate:always load a fresh copy of page
    //max-age:cache content to be expired immediately
    //header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    //header("Cache-Control: post-check=0, pre-check=0", false);
    //header("Pragma: no-cache");
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!==true ){
        die("Access denied <a href='index.php'>Login</a>");
    }
?>