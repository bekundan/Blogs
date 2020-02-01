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
			$_SESSION["USER_ROLE"]=$row["Role"];
			$_SESSION["USER_ID"]=$row["id"];
			header("Location:index.php");
		}
		else{
			echo "Failure";
		}
	 }
   }
 };

 //update post submition

 if (isset($_POST["updatepostform"]) && !empty($_POST["updatepostform"])) {
 	$newpost = mysqli_real_escape_string($connection,$_POST["newpost"]);
 	$articleid =mysqli_real_escape_string($connection,$_POST["articleid"]);

 	$updatequery ="UPDATE articles SET Post='$newpost' WHERE article_id ='$articleid'";

 	if (mysqli_query($connection,$updatequery)) {
 		header("Location:admin.php");
 		echo "update success";
 	}
 	else{
 		echo "$updatequery";
 		echo("Error description: " . mysqli_error($connection));
 	}
 };

  // search users
if (isset($_POST["search_users"]) && !empty($_POST["search_users"])) {
	
	$user_name = mysqli_real_escape_string($connection,$_POST["uname"]);
	$user_email = mysqli_real_escape_string($connection,$_POST["uemal"]);
	$user_phone = mysqli_real_escape_string($connection,$_POST["uphone"]);

	$searchquery ="SELECT * FROM users JOIN Role ON roles.id = users.Role WHERE Name LIKE '%$user_name%'";
	$result =mysqli_query($connection,$searchquery);
	if (!mysqli_num_rows($result)) {
		$all_results = array('status'=>'No user found!');
	}
	else{
			$all_results = array('status'=>'User found');
			while($row = mysqli_fetch_assoc($result)){
			array_push($all_results,$row);
			header("Location:admin.php");
		}
		
	}
		echo json_encode($all_results);
	}

?>