<?php

    require_once "dbConnect.php";


    function checkLogin($user){
        $con = getConnection();
        $sql = "select * from users where id='{$user['id']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        
        if($count > 0){
            while($row = mysqli_fetch_array($result)){
                $user = ['id'=>$row['id'], 'name'=>$row['name'], 'email'=>$row['email'], 'userType'=>$row['userType']];
                return $user;
            }
        }else{
            return false;
        }
    }

    function searchbyName($name){
        $con = getConnection();
        $sql = "select * from users where name='{$name}'";
        $result = mysqli_query($con, $sql);
        echo "<table><tr><td colspan='2'Profile</td></tr>>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>ID</td> <td>".$result."['id']</td></tr>";
            echo "<tr><td>Name</td> <td>".$result."['name']</td></tr>";
            echo "<tr><td>Email</td> <td>".$result."['email']</td></tr>";
            echo "<tr><td>User Type</td> <td>".$result."['userType']</td></tr></table>";
            
        }
    }

    function insertUser($user){
        $con = getConnection();
        $sql = "INSERT INTO users values('{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['email']}')";
        $status = mysqli_query($con, $sql);
        return $status;  
    }
?>