<?php
include_once "./config1.php";

$s_name=$_POST["s_name"];
$o_name=$_POST["o_name"];
$gender=$_POST["gender"];
$m_no=$_POST["m_no"];
$occupation=$_POST["occupation"];
$address=$_POST["address"];
$state=$_POST["state"];
$email=$_POST["email"];
$p_number=$_POST["p_number"];
$dob=$_POST["dob"];
$be_address=$_POST["be_address"];

$sql = "Insert into special(s_name,o_name,gender,m_no,occupation,address,state,email,p_number,dob,be_address) values('$s_name','$o_name','$gender','$m_no','$occupation','$address','$state','$email','$p_number','$dob','$be_address')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./icons.php");
}
else{
    echo "Unsuccessful!!";
}
?>