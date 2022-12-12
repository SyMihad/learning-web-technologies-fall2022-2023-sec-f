<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <fieldset>
            <legend>LOGIN</legend>
            <form method="post" action="controllers/loginCheck.php" enctype="">
                User ID<br>
                <input type="text" name="id" value="">
                <br>Password:<br>
                <input type="password" name="password" value="">
                <br><br>
                <input type="submit" name="submit" value="Login">
                <a href="views/registration.php">Registration</a>
            </form>

        </fieldset>
    </body>
</html>