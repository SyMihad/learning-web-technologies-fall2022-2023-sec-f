<?php

    require_once "dbConnect.php";

    $name = $_POST['searchName'];

    
    $con = getConnection();
    $sql = "select * from food_item where restaurant_name='$name'";
    $result = mysqli_query($con, $sql);
    
    echo("
    
    <table>
    <tr>
    <td>Name</td>
    <td>Price</td>
    </tr>
    </table>

    ");

    while($row = mysqli_fetch_array($result)){
        echo("<tr>
        
        <td>$row[1]</td>
        <td>$row[2]</td>
        
        </tr>");
    }
    

?>