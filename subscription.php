<?php
include_once "./config1.php";

$m_no=$_POST["m_no"];
$month=$_POST["month"];
$amount=$_POST["amount"];

$sql="Insert into subscription(m_no,month,amount) values('$m_no','$month','$amount')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./user.php");
}
else{
    echo "Unsuccessful!!";
}
?>