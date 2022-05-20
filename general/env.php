<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbName = "face_attendence";
$con = mysqli_connect($host,$user,$password, $dbName);
// if ($con)  {
//     echo "Connect Succesfully <br>";
// } else {
//     echo "Connection Failed <br>";
// }
session_start();
function auth()
{
    if ($_SESSION['email'] != "") {
    } else {
        header("location:/hospital/general/login.php");
    }
}

?>