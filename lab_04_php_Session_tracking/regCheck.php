<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];

    if($username == "" || $password == "" || $email == ""){
        header('location: signup.php?err=null');
    }else{
        $user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'confirmpassword'=>$confirmpassword, 'gender'=>$gender];
        $_SESSION['user']= $user;
        header('location: login.php');
    }
?>