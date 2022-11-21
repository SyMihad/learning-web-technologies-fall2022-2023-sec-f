<?php
    $foodSelect = $_POST['foodSelect'];
    $quantity = $_POST['quantity'];
    $restaurantSelect = $_COOKIE['restaurantSelect'];
    $username = $_POST['guestName'];

    $record= "\r\n".$foodSelect."|".$quantity."|".$restaurantSelect."|"."guest-".$username; 
    $file =fopen('customer/data/foodOrderList.txt','a');
    fwrite($file,  $record);    
    fclose($file);
    header('location: thankingGuest.php');
?>