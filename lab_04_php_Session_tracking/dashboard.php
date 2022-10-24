<?php
    $username = $_SESSION['user']['username'];

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
                    
                    <td>
                       Account<br><hr>
                        <a href="dashboard.php">Dashboard</a><br>
                        <a href="viewProfile.php">View Profile</a><br>
                        <a href="editProfile.php">Edit Profile</a><br>
                        <a href="changeprofilePicture.php">Change Profile Picture</a><br>
                        <a href="changePassword.php">Change Password</a><br>
                        <a href="logout.php">Logout</a><br>
                    </td>
                    <td>
                        <h3>Welcome $username</h3>
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

