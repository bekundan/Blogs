<?php

include "config.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<div class="container">
		<div class="row">	
	 <div class="col-12">
            <div class="text-center display-2 mt-2">Add a new article</div>
            <div class="col-12 col-sm-8 col-md-6 offset-sm-2 offset-md-3 mt-3">
                  <form id="add_post" action="action.php" method="POST">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Post title</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="post_title">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Category</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="post_cat">
                        <option value="Travel">Travel</option>
                        <option value="Food">Food</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Fashion">Lifestyle</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Article</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="post_article"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput2">Image</label>
                      <input type="text" class="form-control w-50" id="exampleFormControlInput2" name="post_image">
                    </div>
                    <div class="form-group">
                    <div id="res_msg" class="text-center font-weight-bold"></div>
                    <input type="hidden" name="add_post_form" value=1>
                    <input type="submit" class="form-control w-auto btn btn-primary" id="exampleFormControlInput3" value="Submit">
                    </div>
                    <div class="mb-5"></div>
                  </form>
            </div> <!-- col-12 -->
        </div> <!-- col-12 -->
	
      </div> <!--row-->
      	</div>
</body>
</html>