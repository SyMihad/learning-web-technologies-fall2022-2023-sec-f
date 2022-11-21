<?php

if(isset($_GET['err'])){
    if($_GET['err']=='null'){
        echo "Please fillup all the data.";
    }
    else if($_GET['err']=='passNotMatch'){
        echo "Please type the password correctly.";
    }
if(isset($_GET['msg'])){
    if($_GET['msg']=='successful'){
        echo "Successfully Added.";
    }
}
}

?>

<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form method="post" action="../controllers/checkCustomerRegistration.php" enctype="">
            <fieldset>
                <legend>Registration For Customer</legend>
                <table align="center">
                    
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="firstName" placeholder="first name" required></td>
                    </tr>
                    
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="lastName" placeholder="last name" required></td>
                    </tr>

                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="userName" placeholder="user name" required></td>
                    </tr>
 
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" value="male" required>Male
                            <input type="radio" name="gender" value="female" required>Female
                            <input type="radio" name="gender" value="other" required>Other
                        </td>
                    </tr>

                    <tr>
                        <td>Birthdate:</td>
                        <td><input type="date" name="birthDate" required></td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="userEmail" value="" placeholder="email" required></td>
                    </tr> 
                    
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="tel" name="userPhoneNum" value="" required></td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="userPassword" value="" placeholder="password" required></td>
                    </tr>

                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="userConfirmPassword" value="" required></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="" value="Register">
                            <input type="reset" name="" value="Reset">
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </body>
</html>