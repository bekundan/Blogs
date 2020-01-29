<?php
include "config.php";
session_start();
$article_query = "SELECT * FROM `articles` JOIN users ON articles. Author_id = users.id";

if (isset($_SESSION["USERNAME"]) && ($_SESSION["USERNAME"])) {
    $login_status=true;
    $display_name="Hello".$_SESSION["USERNAME"]."!";
}
else{
    $login_status =false;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
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
                                <?php
                      if($login_status){
                     echo '<li class="nav-item">
                                <a class="nav-link logout-trigger" href="files/logout.php"> 
                                Logout'." ".$display_name.'</a>
                            </li>';

                  }else{
                   echo ' <li class="nav-item">
                            <a class="nav-link" id="signup-trigger" data-toggle="modal" data-target="#sign-modal">
                             Sign up
                            </a>
                          </li>';
                  }
                  ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="d-flex justify-content-between align-self-center m-5">
                    <div class="container">
                        <div class="col-12 col-sm-6">
                            <div class=" justify-content-between align-self-center headtext ">
                                <h1>view the ocean of post</h1>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, omnis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--        header end here-->
        <!--    3 card section section-->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/cardimg1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="cardtext text-center">
                                    <a href="">
                                        <p>Fashion/Lifestyle</p>
                                    </a>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/cardimg2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="cardtext text-center" >
                                    <a href="">
                                        <p>Travel/Place</p>
                                    </a>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/cardimg3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="cardtext text-center">
                                    <a href="">
                                        <p>Tech/Techproducts</p>
                                    </a>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    3 card section section end-->
        <div class="mt-5 mb-5"></div>
        <!-- category section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="card text-center">
                            <img src="./images/postimg.jpg" class="card-img" alt="postimg">
                            <div class="card-body">
                                <div class="cardtext">
                                    <a href="">
                                        <p>Lifestyle/Travel</p>
                                    </a>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="card ml-sm-5 ml-3" id="category" style="max-width: 18rem;">
                            <div class="card-header">Category</div>
                            <div class="card-body">
                                <div class="cate-list mt-5 text-center">
                                    <li><a href="">Tech</a></li>
                                    <li><a href="">Lifestyle</a></li>
                                    <li><a href="">Travel</a></li>
                                    <li><a href="">Fashion</a></li>
                                    <li><a href="">Food</a></li>
                                    <li><a href="">Gallery</a></li>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    3 card section end-->
        <!-- form modal  -->
        
        <div id="sign_modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="sign_form">
                            <form id="sign_up_form" action="signup.php" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="fname">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username" name="uname">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control" id="password" placeholder="password" name="pass">
                                </div>
                                <div class="form-group">
                                    <label for="password">confirm password</label>
                                    <input type="password" class="form-control" id="repass" placeholder="password" name="repass">
                                </div>
                                <div class="signup-msg text-danger font-weight-bold"></div>
                                <button class="btn btn-primary" type="submit">submit</button>
                            </form>
                            <div>You allready signUp <span class="Login">LogIn</span></div>
                        </div>
                        <div class="login_from">
                            <form action="" method="POST">
                                 <div class="form-group">
                                    <label for="formGroupExampleInput">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" name="loginuser">
                                </div>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control" id="password" placeholder="password" name="loginpass">
                                </div>
                                 <input type="hidden" name="login-form-submit" value=1>
                                <div class="signup-msg text-danger font-weight-bold"></div>
                                <button class="btn btn-primary" type="submit">submit</button>
                            </form>
                            <div>You are new here <span class="Login">SignIn</span></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 offset-sm-2 offset-md-3 mt-3 mb-3">
                    
                    <h1 class="display-4 text-center">All articles</h1>
                    <?php
                    $result = mysqli_query($connection, $article_query);
                    while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="article_summary">
                        <h1>'.$row["Post_title"].'</h1>
                        <p>Date: '.$row["Created_at"].'</p>
                        <p>Category: '.$row["Ctg"].'</p>
                        <p>Author: '.$row["Name"].'</p>
                        <p class="mt-3">
                            '.$row["Post"].'
                        </p>
                        </div> <!-- article_summary -->';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- form modal ends -->
            <!-- new post section -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="./images/postimg.jpg" alt="Card image">
                                <div class="card-body bg-light">
                                        <a href="#" class="text-center" ><p>Trave/Tech</p></a>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, commodi!.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="./images/postimg.jpg" alt="Card image">
                                <div class="card-body bg-light">
                                        <a href="#" class="text-center" ><p>Trave/Tech</p></a>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, commodi!.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new post section end-->

            <!-- foooter -->

                <footer>
                    <div class="container-fluid footer">
                        <div class="row">
                           <div class="col-12 col-sm-6">
                            <h1 class="text-center text-white">Aboutus</h1>
                               <div class="card mt-5">
                                   <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ut voluptatem, deserunt cupiditate sunt ad necessitatibus corrupti dolor modi architecto alias, impedit pariatur repellat accusantium culpa. Temporibus sapiente non sequi?
                                   </p>
                               </div>
                           </div>
                           <div class="col-12 col-sm-6 ">
                            <h1 class="text-center text-white">Social media</h1>
                               <div class="card mt-5">
                                   <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ut voluptatem, deserunt cupiditate sunt ad necessitatibus corrupti dolor modi architecto alias, impedit pariatur repellat accusantium culpa. Temporibus sapiente non sequi?
                                   </p>
                               </div>
                           </div>
                        </div>
                    </div>
                </footer>

            <!-- footer end -->
            <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="js/app.js"></script>
        </body>
    </html>