<?php
    $currentpassword = $_POST['currentpassword'];
    $newpassword = $_POST['newpassword'];
    $retypepassword = $_POST['retypepassword'];

    $successful = FALSE;

    if(($newpassword==$retypepassword) && ($currentpassword!=$newpassword)){
        echo 'Password Changed Successfully';
    }
    else{
        echo 'Password did not changed';
    }
?>