<?php

    session_start();
    $productName = trim($_GET['name']);
    $con = mysqli_connect('localhost', 'root','', 'webtech');
?>

<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <form method="post" action="editCheck.php" enctype="">
            <b>Name</b><br>
            <?php
                print("<input type=text name=name value=$productName readonly> ");
            ?>

            <?php
                $sql = "SELECT * from product_db WHERE product_name='".$productName."'";
                $results=mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($results)){
                    //echo $row['buying_price'];
                    print("<br><b>Buying Price</b><br>");
                    print("<input type=text name=buyingPrice value=".$row['buying_price'].">");

                    print("<br><b>Selling Price</b><br>");
                    print("<input type=text name=sellingPrice value=".$row['selling_price'].">");
                    print("<hr>");
                    if($row['displayable']=='Yes'){
                        print("<input type='checkbox' name='displayable' value='Yes' checked>Display");
                    }else{
                        print("<input type='checkbox' name='displayable' value='Yes' >Display");
                    }
                }
            ?>
            <hr>
            <input type="submit" name="submit" value="SAVE">
        </form>
    </body>
</html>