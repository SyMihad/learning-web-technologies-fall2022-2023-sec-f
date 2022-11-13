<?php

    session_start();
    $productName = trim($_GET['name']);
    $_SESSION['productName'] = $productName;
    $con = mysqli_connect('localhost', 'root','', 'webtech');
?>

<html>
    <head>
        <title>Delete</title>
    </head>
    <body>
        <form method="post" action="deleteCheck.php" enctype="">
            <b>Name: </b>
            <?php
                print($productName."<br>");
            ?>

            <?php
                $sql = "SELECT * from product_db WHERE product_name='".$productName."'";
                $results=mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($results)){
                    print("Buying Price: ");
                    print($row['buying_price']."<br>");
                    print("Selling Price: ");
                    print($row['selling_price']."<br>");
                    print("<hr>");
                    if($row['displayable']=='Yes'){
                        print("<input type='checkbox' name='displayable' value='Yes' checked>Display");
                    }else{
                        print("<input type='checkbox' name='displayable' value='Yes' >Display");
                    }
                }
            ?>
            <hr>
            <input type="submit" name="submit" value="Delete">
        </form>
    </body>
</html>