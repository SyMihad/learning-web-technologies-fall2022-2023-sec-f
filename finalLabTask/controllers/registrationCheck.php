<?php

require_once "../models/userModel.php";

$id = $_POST['id'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$userType = $_POST['userType'];

$user = ['id'=>$id, 'password'=>$password, 'name'=>$name, 'email'=>$email, 'userType'=>$userType];
$status = insertUser($user);
if($status){
    header('location: ../login.php?msg=successful');
}else{
    header('location: ../views/registration.php?err=invalid');
}

?>