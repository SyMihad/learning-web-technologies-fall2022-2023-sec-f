<?php
    require_once "../models/userModel.php";
    $id = $_POST["id"];
    $password = $_POST["password"];

    $user = ["id"=> $id, "password"=>$password];
    $status = checkLogin($user);
    if($status!=false){
        setcookie('status', 'true', time()+60*60*72, '/');
        setcookie('id', $user['id'], time()+60*60*72, '/');
        setcookie('username', $status['name'], time()+60*60*72, '/');
        if($status['userType']=='Admin'){
            header("location: ../views/admin.php");
        }
        else{
            header('location: ../views/user.php');

        }
    }
    else{
        header('location: home.php?err=invalid');
    }

?>