<?php
require_once "../models/dbConnect.php";
$con = getConnection();
$sql = "select * from users where name='{$name}'";
$result = mysqli_query($con, $sql);
echo "<table><tr><td colspan='2'Profile</td></tr>>";
while($row = mysqli_fetch_array($result)){
    echo "<tr><td>ID</td> <td>".$result."['id']</td></tr>";
    echo "<tr><td>Name</td> <td>".$result."['name']</td></tr>";
    echo "<tr><td>Email</td> <td>".$result."['email']</td></tr>";
    echo "<tr><td>User Type</td> <td>".$result."['userType']</td></tr>";
    
}
echo "</table>";

?>