<?php

include "config.php";
session_start();

if (isset($_POST["add_post_form"])) {

	$post_title = mysqli_real_escape_string($connection, $_POST["post_title"]);
	$post_cat = mysqli_real_escape_string($connection, $_POST["post_cat"]);
	$post_article = mysqli_real_escape_string($connection, $_POST["post_article"]);
	$post_image = mysqli_real_escape_string($connection, $_POST["post_image"]);

	$instaquery = "INSERT INTO `articles`(`Post`,`Author_id`, `Post_title`, `Post_img`, `Ctg`) VALUES ('$post_article',11,'$post_title','$post_image','$post_cat')";
	$result=$instaquery;
	if(!mysqli_query($connection,$instaquery)){
	  echo("Error description: " . mysqli_error($connection));
	}
} 

if(isset($_POST["login-form-submit"]) && !empty($_POST["login-form-submit"])){
	$loginuser =$_POST["loginuser"];
	$loginpass =$_POST["loginpass"];

	$logquery ="SELECT * FROM `users` WHERE Email ='$loginuser' OR phone='$loginuser'";

	$result =mysqli_query($connection,$logquery);

if($result){
	$row =mysqli_fetch_assoc($result);
	$uid =$row["id"];
	$users_displayname =$row["Name"];

	$logquery2 ="SELECT * FROM user_auth WHERE U_id =$uid";

	$result2  = mysqli_query($connection,$logquery2);

	if($result2){
		$row2 =mysqli_fetch_assoc($result2);
		$getpass =$row2["Pwd"];
		if (md5($loginpass)===($getpass)) {
			
			$_SESSION["USERNAME"]=$users_displayname;
			$_SESSION["USER_ROLE"]=$row2["Role"];
			$_SESSION["USER_ID"]=$row2["id"];
			echo "$users_displayname";
		}
		else{
			echo "Failure";
		}
	 }
   }
 };


?>