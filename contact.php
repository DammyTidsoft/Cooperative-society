<?php
include_once "./config.php";

$name=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];
$messages=$_POST["messages"];

$sql="Insert into contact(name,email,address,messages) values('$name','$email','$address','$messages')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./index.php");
}
else{
    echo "Unsuccessful!!";
}
?>