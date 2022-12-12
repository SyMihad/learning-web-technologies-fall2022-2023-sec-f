<?php

    require_once "dbConnect.php";

    $name = $_POST['name'];

    
    $con = getConnection();
    $sql = "select * from food_item where food_name LIKE '%$name%'";
    $result = mysqli_query($con, $sql);

    //echo $result;
    
    echo "
    <table border=1>
    <tr>
    <td>Name</td>
    <td>Price</td>
    <td>Restaurant Name</td>
    </tr>
    ";
    
    while($row = mysqli_fetch_array($result)){
        echo "<tr>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        </tr>";
    }
   echo "</table>";
    

?>