<?php
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
                <td></td>
            </tr>
            
            <?php
                while($row = mysqli_fetch_array($result)){
                   print("<tr><td>$row['name']</td><td>$row['buyingPrice']</td><td>$row['sellingPrice']</td><td>/<td></tr>");
                }
            ?>
            
        </table>
    </body>
</html>