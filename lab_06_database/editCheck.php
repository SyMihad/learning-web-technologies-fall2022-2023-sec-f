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
    $sql = "UPDATE product_db SET buying_price='" . $buyingPrice . "', selling_price='" . $sellingPrice . "', displayable='" . $displayable . "' WHERE product_name='" . $name."'";
    $status = mysqli_query($con, $sql);

    if($status){
        echo "Product Edited";
    }
    else{
        echo "Not successful";
    }
?>