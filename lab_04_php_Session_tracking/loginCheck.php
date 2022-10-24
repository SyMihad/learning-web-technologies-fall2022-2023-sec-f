<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header('location: login.php?err=null');
    }else if($_COOKIE[$username]== $username && $_COOKIE[$password] == $password){
        // setcookie($username, $password, 'true', time()+3600, '/');
        header('location: dashboard.php');
    }else{
        header('location: login.php?err=invalid');
    }

?>