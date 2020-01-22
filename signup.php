<?php
include "config.php";

$name =$_POST["fname"];
$uname =$_POST["uname"];
$email =$_POST["email"];
$phone =$_POST["phone"];
$pass =$_POST["pass"];
$repass=$_POST["repass"];

    
$instquery = "INSERT INTO `users`(`Name`, `U_Name`, `Role`,  `Email`, `Phone`) VALUES ('$name','$uname',2,'$email',$phone )";

echo $instquery;
$result =mysqli_query($connection, $instquery);
echo $result;



?>    
