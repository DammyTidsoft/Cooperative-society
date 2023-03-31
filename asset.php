<?php
include_once "./config1.php";

$f_name=$_POST["f_name"];
$m_no=$_POST["m_no"];
$occupation=$_POST["occupation"];
$h_address=$_POST["h_address"];
$o_office=$_POST["o_office"];
$be_name=$_POST["be_name"];
$be_address=$_POST["be_address"];
$p_number=$_POST["p_number"];
$email=$_POST["email"];
$amount=$_POST["amount"];
$a_balance=$_POST["a_balance"];
$item_d=$_POST["item_d"];
$value=$_POST["value"];
$initial_d =$_POST["initial_d"];
$sql = "Insert into asset(f_name,m_no,occupation, h_address, o_office, be_name, be_address, p_number, email, amount, a_balance, item_d, value, initial_d) values('$f_name','$m_no','$occupation','$h_address','$o_office','$be_name','$be_address','$p_number','$email','$amount','$a_balance', '$item_d','$value','$initial_d')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./assetindex.php");
}
else{
    echo "Unsuccessful!!";
}
?>