<?php



?>

<html>
    <head>
        <title>Add Product</title>
    </head>

    <body>
        <form method="post" action="addProductCheck.php" enctype="">
            <fieldset>
                <legend>ADD PRODUCT</legend>
                Name<br>
                <input type='text' name='name' value=''><br>
                Buying Price:<br>
                <input type='number' name='buyingPrice' value=''><br>
                Selling Price:<br>
                <input type='number' name='sellingPrice' value=''><br>
                <hr>
                <input type='submit' name='submit' value='Save'>
            </fieldset>
        </form>
    </body>
</html>