<html>
    <head>
        <title>Registration</title>
    </head>

    <body>
        <fieldset>
            <legend>REGISTRAION</legend>
            <form method="post" action="../controllers/registrationCheck.php" enctype="">
                ID<br>
                <input type="text" name="id" value="">
                <br>Password:<br>
                <input type="password" name="password" value="">
                <br>Confirm Password:<br>
                <input type="password" name="confirmPassword" value="">
                <br>Name:<br>
                <input type="text" name="name" value="">
                <br>Email:<br>
                <input type="text" name="email" value="">
                <br>User Type:
                <select name="userType">
                    <option value="user" >User</option>
                    <option value="admin" >Admin</option>
                </select>
                <br><br>
                <input type="submit" name="submit" value="Register">
                <a href="../login.php">Login</a>
            </form>

        </fieldset>
    </body>
</html>