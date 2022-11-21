<?php
    session_start();
    require_once "../models/customerModel.php";

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $email = $_POST['userEmail'];
    $phone = $_POST['userPhoneNum'];
    $password = $_POST['userPassword'];
    $confirmPassword = $_POST['userConfirmPassword'];

    if($password != $confirmPassword){
    header('location: registration.php?err==passNotMatch');
    }
    else if($firstName=="" or $lastName=="" or $userName=="" or $email=="" or $phone=="" or $password=="" or $confirmPassword==""){
    header('location: registration.php?err=null');
    }
    else{
        $user = ['firstName'=>$firstName, 'lastName'=>$lastName, 'userName'=>$userName, 'gender'=>$gender, 'birthDate'=>$birthDate, 'email'=>$email, 'phone'=>$phone, 'password'=>$password];
        $status = insertCustomer($user);
        if($status){
            header('location: ../home.php?msg=successful');
        }else{
            header('location: ../views/registration.php?err=invalid');
        }
    }

?>