<html>
    <head>
        <title>Admin Page</title>
    </head>

    <body>
        <h1>Welcome <?php echo $_COOKIE['username'] ?> ! </h1>
        <div id="show"></div>
        <br><br>
        <input type='button' name='profile' value="Show Profile" onClick=showProfile()>

        <!-- <a href="showProfile.php">Profile</a><br> -->
        <a href="changePassword.php">Change password</a><br>
        <!-- <a href="viewUsers.php">View Users</a><br>   -->

        <script>
            let name = $_COOKIE['username'];
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', "../controllers/showProfile.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-formurlencoded");
            xhttp.send('name='+name);
            xhttp.onreadystatechange = function(){
                if(this.readyState ==4 && this.status == 200){
                    document.getElementsByTagName('show').innerHTML = this.responceText;
                }
            }
        </script>
    </body>
</html>