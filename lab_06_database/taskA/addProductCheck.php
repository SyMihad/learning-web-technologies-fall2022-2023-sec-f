<?php
    $name = $_POST['name'];
    $buyingPrice = $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];

    $con = mysqli_connect('localhost', 'root','', 'webtech');
    $sql = "insert into product_db values('{$name}', '{$buyingPrice}', '{$sellingPrice}')";
    $status = mysqli_query($con, $sql);

    if($status){
        echo "Product Add";
    }
    else{
        echo "Not successful";
    }
?>