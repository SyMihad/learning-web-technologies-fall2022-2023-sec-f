<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $uppercaseName = preg_match('@[A-Z]@', $password);
    $lowercaseName = preg_match('@[a-z]@', $password);

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $dash = preg_match('@-@',$password);
    $underscore = preg_match('@_@', $password);

    $usernameCorrect = FALSE;
    $passwordCorrect = FALSE;

    if(!$uppercaseName || !$lowercaseName || !$dash || !$underscore || strlen($username) < 2){
        echo "Wrong Username";
    }
    else{
        $usernameCorrect=TRUE;
    }

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
        echo "Wrong password format";
    }
    else{
        $passwordCorrect = TRUE;
    }

    if(($usernameCorrect && $passwordCorrect)== TRUE ){
        echo "Format correct";
    }
?>