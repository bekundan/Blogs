<?php
include "config.php";

$name =$_POST["fname"];
$uname =$_POST["uname"];
$email =$_POST["email"];
$phone =$_POST["phone"];
$pass =$_POST["pass"];
$repass=$_POST["repass"];

    
$instquery = "INSERT INTO `users`(`Name`, `U_Name`, `Role`,  `Email`, `Phone`) VALUES ('$name','$uname',2,'$email',$phone )";


$result = mysqli_query($connection, $instquery);

if($result){
	$user_id = mysqli_insert_id($connection);
	$query = "INSERT INTO `user_auth`(`U_id`, `Pwd`, `Email_vfy`, `Phone_vfy`) 
	VALUES ($user_id,'".md5($pass)."',0,0)";

	mysqli_query($connection, $query);
	echo "Account successfully created";
}

		// LOgin process


?>    
