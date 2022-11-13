<?php
    session_start();
    $con = mysqli_connect('localhost', 'root','', 'webtech');
    $sql = "SELECT * from  product_db";
    $result = mysqli_query($con, $sql);
?>

<html>
    <head>
        <title>DISPLAY</title>
    </head>

    <body>
    
            <table border="1">
                <tr>
                <td><b>Name</b></td>
                <td><b>Profit</b></td>
                <td colspan="2"></td>
            </tr>
            
            <?php
                while($row = mysqli_fetch_array($result)){
                    if($row['displayable']=='Yes'){
                        echo "<tr>";
                        echo "<td>". $row['product_name'] . "</td>";
                        echo "<td>" . $row['selling_price']-$row['buying_price'] . "</td>";
                        //echo "<td>" . $row['selling_price']. "</td>";
                        echo "<td>" . "<a href='edit.php?name=". $row['product_name'] ."'>Edit" . "</td>";
                        echo "<td>" . "<a href='delete.php?name=". $row['product_name'] ."'>Delete" . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
    </body>
</html>