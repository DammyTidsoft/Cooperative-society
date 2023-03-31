<?php
include_once "./config.php";
$fname=$_POST["fname"];
$sex=$_POST["sex"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$haddress=$_POST["haddress"];
$caddress=$_POST["caddress"];
$email=$_POST["email"];
$ikinname=$_POST["ikinname"];
$ikinaddress=$_POST["ikinaddress"];
$ikinrel=$_POST["ikinrel"];
$ikintel=$_POST["ikintel"];
$iikinname=$_POST["iikinname"];
$iikinaddress=$_POST["iikinaddress"];
$iikinrel=$_POST["iikinrel"];
$iikintel=$_POST["iikintel"];
$have=$_POST["have"];
$namecoop=$_POST["namecoop"];
$position=$_POST["position"];
$reason=$_POST["reason"];

$sql="Insert into registration(fname,sex,age,dob,haddress,caddress,email,ikinname,ikinaddress,ikinrel,ikintel,iikinname,iikinaddress,iikinrel,iikintel,have,namecoop,position,reason) values('$fname','$sex','$age','$dob','$haddress','$caddress','$email','$ikinname','$ikinaddress','$ikinrel','$ikintel','$iikinname','$iikinaddress','$iikinrel','$iikintel','$have','$namecoop','$position','$reason')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./signup.php");
}
else{
    echo "Unsuccessful!!";
}


?>