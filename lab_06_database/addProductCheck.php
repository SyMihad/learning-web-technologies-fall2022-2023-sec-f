<?php
    $name = $_POST['name'];
    $buyingPrice = $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];
    if(isset($_POST['displayable'])=='Yes'){
        $displayable = 'Yes';
    }else{
        $displayable = 'No';
    }

    $con = mysqli_connect('localhost', 'root','', 'webtech');
    $sql = "insert into product_db values('{$name}', '{$buyingPrice}', '{$sellingPrice}', '{$displayable}')";
    $status = mysqli_query($con, $sql);

    if($status){
        echo "Product Add";
    }
    else{
        echo "Not successful";
    }
?>