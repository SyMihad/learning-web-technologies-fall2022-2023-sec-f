<?php
    session_start();
    $name = $_SESSION['productName'];
    
    $con = mysqli_connect('localhost', 'root','', 'webtech');
    $sql = "DELETE from product_db WHERE product_name='".$name."'";
    $status = mysqli_query($con, $sql);

    if($status){
        echo "Product Deleted";
    }
    else{
        echo "Not successful";
    }
?>