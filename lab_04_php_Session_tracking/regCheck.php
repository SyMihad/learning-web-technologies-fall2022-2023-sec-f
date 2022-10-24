<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];

    if($username == "" || $password == "" || $email == ""){
        header('location: registration.php?err=null');
    }else{
        $user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'confirmpassword'=>$confirmpassword, 'gender'=>$gender];
        $_SESSION['user']= $user;
        setcookie($name, $email, $username, $password, $confirmpassword, $gender, time()+3600, "/");
        header('location: login.php');
    }
?>