<?php
include_once "./config1.php";
$username=$_POST["username"];
$password=$_POST["password"];

$sql="Insert into login(username,password) values('$username','$password')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./addnew.php");
}
else{
    echo "Unsuccessful!!";
}
?>