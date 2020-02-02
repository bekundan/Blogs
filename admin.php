<?php
include "config.php";

$allposts="SELECT * FROM articles JOIN users ON articles.Author_id =users.id ORDER BY Created_at desc";


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div class="container-fluid menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">JustMore</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="#mytools">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                	
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>


			<!-- button for modify section -->
		<div class="container-fluid">
			<div class="row mt-5 ">
				<div class="col-12 text-center">
				<button class="btn btn-info">Modify Content</button>
				<button class="btn btn-info">Change Role</button>
				<button class="btn btn-info">Moderate comments</button>
				</div>
				
			</div>

	<!-- Section of table for content -->

	<div class="row mt-5 ">
		<div class="col-12 col-sm-8 offset-sm-2">
			<table border="solid " class="modepost_table" width="800" cellpadding="15">
				<thead>
					<th>Title</th>
					<th>Date</th>
					<th>Author</th>
					<th>Category</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
					$result =mysqli_query($connection,$allposts);
					while ($row =mysqli_fetch_assoc($result)) {
						echo '<tr>
						<td>'.$row["Post_title"].'</td>
						<td>'.$row["Created_at"].'</td>
						<td>'.$row["Name"].'</td>
						<td>'.$row["Ctg"].'</td>
						<td><button class="btn btn-secondary modify-post" post-id="post'.$row["article_id"].'">Modify</button></td>
						</tr>
						<tr style="display:none;" id="post'.$row["article_id"].'">
						<form class="updated_post" action="action.php" method="POST">
						<td colspan=4>
										<textarea name="newpost">'.$row["Post"].'</textarea>
										</td>
										<td>
										<input name="articleid" type="hidden" value="'.$row["article_id"].'">
										<input name="updatepostform" value=1 type="hidden">
										<input type="submit" value="Save Changes">
										</td>
									</form>
								</tr>		
						';
					}


					?>
				</tbody>
			</table>
		</div>
	</div>
</div>   <!-- container -->

	<!-- change role of user -->

	<div class="container-fluid">
		<div class="row mt-5 mb-3">
			<div class="col-12 col-sm-8 offset-sm-2">
				<h1>Change username BY search here</h1>
				<form class="search_users" action="action.php" method="POST">
					<input type="text" name="uname" placeholder="Name">
					<input type="text" name="uemail" placeholder="Email">
					<input type="text" name="uphone" placeholder="Password">
					<input type="hidden" value="1" name="user_by_name">
					<input type="submit" class="btn btn-outline-info">
				</form>
			<div class="users_name_display">
				<table id="user_response" class="table" border="solid">
					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Role</th>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>

			</div>
		</div>
	</div>

  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>

</body>
</html>