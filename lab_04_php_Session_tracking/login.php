<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>

<html>
    <head>
        <title>PUBLIC Home</title>
    </head>
    <body>
        
            <table>
                <tr>
                    <td>
                        <img src="logo.png">
                    </td>
                    <td align="right" >
                        <a href="home.php">Home |</a>
                        <a href="login.php">Login |</a>
                        <a href="registration.php">Registration</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    
                    <td colspan="2">
                        <form method="post" action="login.php" enctype="">
                            <fieldset>
                                <legend>LOGIN</legend>
                                User Name: <input type="text" name="username" value=""><br>
                                Password   : <input type="password" name="password" value=""><br><hr>
                                <input type="checkbox" name="remember" value="">Remember Me<br>
                                <input type="submit" name="submit" value="Submit">
                                <a href="forgotpassword.html">Forgot Pasword</a>
                            </fieldset>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="middle">
                        Copyright 2017
                    </td>
                </tr>
            </table>
        
    </body>
</html>