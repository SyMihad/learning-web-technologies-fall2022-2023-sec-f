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
                        <td><input type="text" id="firstName" name="firstName" placeholder="first name" required onmouseout="activateSubmit()"></td>
                    </tr>
                    
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" id="lastName" name="lastName" placeholder="last name" required onmouseout="activateSubmit()"></td>
                    </tr>

                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" id="userName" name="userName" placeholder="user name" required onmouseout="activateSubmit()"></td>
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
                        <td><input type="date" id="birthDate" name="birthDate" required onmouseout="activateSubmit()"></td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td><input type="email" id="email" name="userEmail" value="" placeholder="email" required onmouseout="activateSubmit()"></td>
                    </tr> 
                    
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="tel" id="phoneNum" name="userPhoneNum" value="" required onmouseout="activateSubmit()"></td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="password" name="userPassword" value="" placeholder="password" required onmouseout="activateSubmit()"></td>
                    </tr>

                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" id="conirmPassword" name="userConfirmPassword" value="" required onmouseout="activateSubmit()"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="" value="Register" id="submit" onmouseover="disableSubmit()" onmouseout="activateSubmit()">
                            <input type="reset" name="" value="Reset">
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>

        <script>
            document.getElementById("submit").disabled=true;
            
            function checkNametype(data){
                const forName =    ["A", "B", "C", "D", "E","F", "G", "H", "I", "J",
                                    "K", "L", "M", "N", "O","P", "Q", "R", "S", "T",
                                    "U", "V", "W", "X", "Y","Z",
                                    "a", "b", "c", "d","e", "f", "g", "h", "i","j",
                                    "k", "l", "m", "n","o", "p", "q", "r", "s","t",
                                    "u", "v", "w", "x","y", "z",
                                    "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
                                    " ", "-", "_"];


                for(let i=0;i<data.length; i++){
                    let position = forName.includes(data[i]);
                    if(position==false){
                        return false;
                    }
                }
                return true;
            }

            function checkPasswordtype(data){
                const forPassword = ["@", "#", "$", "%"];
                for(let i=0; i<data.length;i++){
                    let value = forPassword.includes(data[i]);
                    if(value==true){
                        return true;
                    }
                }
                return false;
            }



            function checkEmail(data){
                    let flag1 = false;
                    let flag2 = false;

                    for(let i=0;i<data.length;i++){
                        if(data[i]=="@"){
                            flag1=true;
                        }
                        if(data[i]=="."){
                            flag2=true;
                        }
                    }

                    if(flag1==true && flag2==true){
                        return true;
                    }
                    else{
                        return false;
                    }
                }

            function activateSubmit(){
                document.getElementById("submit").disabled = false;
            }

            function checkValidation(){
                if(document.getElementById("firstName").value==""){
                    alert("First name should not be null.");
                    return false;
                }
                if(checkNametype(document.getElementById("firstName").value)==false){
                    alert("First Name can contain alpha numeric value, period, dash or underscore.");
                    return false;
                }

                if(document.getElementById("lastName").value==""){
                    alert("Last name should not be null.");
                    return false;
                }
                if(checkNametype(document.getElementById("lastName").value)==false){
                    alert("Last Name can contain alpha numeric value, period, dash or underscore.");
                    return false;
                }

                if(document.getElementById("userName").value==""){
                    alert("user name should not be null.");
                    return false;
                }
                if(checkNametype(document.getElementById("userName").value)==false){
                    alert("User Name can contain alpha numeric value, period, dash or underscore.");
                    return false;
                }
                if(document.getElementById("firstName").value.length<2){
                    alert("User name must contain at least two characters.");
                    return false;
                }

                if(document.getElementById("birthDate").value==""){
                    alert("Birth Date must be selected.");
                    return false;
                }

                if(document.getElementById("email").value==""){
                    alert("email should not be null.");
                    return false;
                }
                if(checkEmail(document.getElementById("email").value)==false){
                    alert("Please enter an valid Email Address.");
                    return false;
                }

                if(document.getElementById("phoneNum").value==""){
                    alert("Phone Number should not be null.");
                    return false;
                }

                if(document.getElementById("password").value==""){
                    alert("Password should not be null.");
                    return false;
                }
                if(checkPasswordtype(document.getElementById("password").value)==false){
                    alert("Password must contain at least one of the special charecters(@, #, $, %)");
                    return false;
                }
                if(document.getElementById("password").value.length<8){
                    alert("Password must not be less than 8 characters.");
                    return false;
                }
                if(document.getElementById("confirmPassword").value==""){
                    alert("Confirm Password should not be null.");
                    return false;
                }
                if(checkPasswordtype(document.getElementById("confirmPassword").value)==false){
                    alert("Password must contain at least one of the special charecters(@, #, $, %)");
                    return false;
                }
                if((document.getElementById("password").value)!=(document.getElementById("confirmPassword").value)){
                    alert("Password and confirm password must be same.");
                    return false;
                }

                return true;

            }

            function disableSubmit(){
                if(checkValidation()==false){
                    document.getElementById("submit").disabled=true;
                }
            }


        </script>
    </body>
</html>