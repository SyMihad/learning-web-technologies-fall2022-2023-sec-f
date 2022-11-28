<?php
     session_start();
     $_SESSION['user']['userType']="customer";

?>



<html>
    <head>
        <title>Customer Registration</title>
    </head>
    <body>
        <form method="post" action="customerRegCheck.php" enctype="">
            <fieldset>
                <legend><p  style="font-size:20px;">Welcome To Food Court Management System</p></legend>
                <table align="center" height="700px" width="700px"  border="1">
                    <tr><td align="center"><h1>Customer Registration</h1></td></tr>
                    <tr><td><hr></td></tr>

                   <?php
                        if(isset($_GET['err']))
                        {
                            if($_GET['err'] == 'null'){
                                echo '<tr><td align="center"><p  style="color:red; font-size:20px;"><b>Error: Input the fields properly!<b></p></td></tr>';  
                            }

                            else if($_GET['err'] == 'passwords_unmatched'){
                                echo '<tr><td align="center"><p  style="color:red; font-size:20px;"><b>Error: Passwords do not match!<b></p></td></tr>';  
                            }

                            else if($_GET['err'] == 'already_taken'){
                            
                                echo '<tr><td align="center"><p  style="color:red; font-size:20px;"><b>Error: Username/Email already registered by someone else!<b></p></td></tr>';  

                            }

                            else if($_GET['err'] == '|_instance'){
                            
                                echo '<tr><td align="center"><p  style="color:red; font-size:20px;"><b>Error: Use of "|" not allowed!<b></p></td></tr>';  

                            }
  
                        } 
                      ?>

                     

                    <tr>
                        <td>
                            <table align="center" border="1" width="500px"   >
                        
                                
                                <td colspan="2" >  <p  style="font-size:20px;"><b>Please Enter Your Information:  </b> </p></td>
                                </tr>
                                <tr><td colspan="2"><hr></td></tr>
                                <tr>
                                    <td  style="padding:10px">
                                    <b> Username:</b>
                                    </td>
                                    <td>
                                    <input style="width: 200px; height: 30px;" type="text" name="username" value="" placeholder="Username"> 
                                    </td>
                                </tr>
                                
                                <tr >
                                    <td style="padding:10px">
                                    <b>  Email:</b>
                                    </td>
                                    <td>
                                    <input style="width: 200px; height: 30px;" type="email" name="email" value="" placeholder="E-mail"> 
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td style="padding:10px">
                                    <b>   Password:</b>
                                    </td>
                                    <td>
                                     <input style="width: 200px; height: 30px;" type="password" name="password" value="" placeholder="Password"> 
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td style="padding:10px">
                                    <b> Retype Password:</b>
                                    </td>
                                    <td >
                                    <input style="width: 200px; height: 30px;" type="password" name="retypedPassword" value="" placeholder="Retype Password">
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px">
                                    <b> Address:</b>
                                    </td>
                                    <td>
                                    <input style="width: 200px; height: 30px;" type="text" name="address" value="" placeholder="Address">
                                    </td>
                                </tr>
                                
                               

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                 
                                
                                

                                <tr>
                                     
                                    <td align="center" colspan="2">
                                        <input type="submit" name="" value="Register" id="submit"> &nbsp
                                        <input type="reset" name="" value="Reset">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr align="center">
                                    <td colspan="2"><a href="guest.php">Login as a Guest</a></td>
                                </tr>
                                <tr align="center">
                                    <td colspan="2"><a href="home.php">Home Page</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <script>
            function checkNametype(data){

                const forUserName = ["A", "B", "C", "D", "E","F", "G", "H", "I", "J",
                                    "K", "L", "M", "N", "O","P", "Q", "R", "S", "T",
                                    "U", "V", "W", "X", "Y","Z", "a", "b", "c", "d",
                                    "e", "f", "g", "h", "i","j", "k", "l", "m", "n",
                                    "o", "p", "q", "r", "s","t", "u", "v", "w", "x",
                                    "y", "z", " ", "-", "_"];

                for(let i=0;i<data.length; i++){
                    let position = forUserName.includes(data[i]);
                    if(position==false){
                        alert("Name must contain alphabet, period, dash or underscore.");
                        return false;
                    }
                }
                return true;
            }


        </script>
    </body>
    </html>