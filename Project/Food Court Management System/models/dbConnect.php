<?php

    $host = "localhost";
    $dbname = "food_court_management_system";
    $dbpass = "";
    $dbuser = "root";

    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;

        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }

?>