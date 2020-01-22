<?php

include "config.php";
session_start();

if (isset($_POST["add_post_form"])) {

	$post_title = mysqli_real_escape_string($connection, $_POST["post_title"]);
	$post_cat = mysqli_real_escape_string($connection, $_POST["post_cat"]);
	$post_article = mysqli_real_escape_string($connection, $_POST["post_article"]);
	$post_image = mysqli_real_escape_string($connection, $_POST["post_image"]);

	$query = "INSERT INTO `articles`(`Post`,`Author_id`, `Post_title`, `Post_img`, `Ctg`) VALUES ('$post_article',11,'$post_title','$post_image','$post_cat')";
	$result=$query;
	if(!mysqli_query($connection,$query)){
	  echo("Error description: " . mysqli_error($connection));
	}
} 

?>