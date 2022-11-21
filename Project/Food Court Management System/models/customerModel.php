<?php
    require_once "dbConnect.php";

    function customerLogin($user){
        $con = getConnection();
        $sql = "select * from customer where user_name='{$user['userName']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0){
            return true;
        }else{
            return false;
        }
    }

    function insertCustomer($user){
        $con = getConnection();
        $sql = "insert into customer values('{$user['firstName']}','{$user['lastName']}','{$user['userName']}','{$user['gender']}','{$user['birthDate']}','{$user['email']}','{$user['phone']}','{$user['password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
?>