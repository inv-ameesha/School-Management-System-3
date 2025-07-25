<?php
    //using the global var $_SERVER CHECK whether the request method is post or not 
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        /*echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';*/
        $username = $_POST['username'];//get the username and pwd
        $password = $_POST['password'];

        if($username=='admin' && $password=='admin'){
            session_start();
            $_SESSION['logged_in']=true;//set the key of session to be true
            header("location:home.php");//redirect
            exit();//to avoid security related errors like authentication
        }
        else{
        echo "Invalid Credentials <a href='index.php'>Login</a>";
    }
}
?>