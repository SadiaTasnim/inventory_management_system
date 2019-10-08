<?php
  require 'config/config.php';
  require 'config/functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SuperShop</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/cb4a67ae30.js" crossorigin="anonymous"></script>

</head>

<body>


    
<!--main nav var-->
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php cart(); ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                        <a class="nav-link" href="#">Welcome Guest</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Items in your list : <?php items(); ?> </a> 
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Total Price : <?php total_price(); ?> </a> 
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>

                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            My Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.php">Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="register.php">Sign Up</a>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </nav>
        <!-- search box -->
        <div class="top-nav-bar">
                <div class="search-box">
                   
                    <img src="image/logo1.jpg" class="logo">
                    <input type="text" class="form-control">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <div class="cart-bar mt-1">
                    <ul>
                        <li class="cart_basket"><a href="cart.php"><i class="fas fa-shopping-basket"></i>cart</a></li>
                    </ul>
                </div>
            </div>
           
        <!-- Menu -->
        <div class="container mt-5">
            <div class="row">
                <div style="background:#f1f1f1;height:auto;width:auto;" class="col-md-6">
                    
                    
                <?php
                        getCat();
                        getCatPro();
               ?>
               

           </div>            
                 

                <!-- Slider -->
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="image/cover1.png">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/cover2.png">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/cover3.png">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <!-- featured -->

  <div class="container">
        <div class="row">
          
             <?php getPro() ; ?> 
        </div>



           
        <!-- footer -->

        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                            <h3>Our Shop</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut libero
                                laboriosam tempore praesentium ea expedita tenetur ex accusamus temporibus
                                laudantium officia vitae quaerat minima quibusdam rem dolor doloremque,
                                repudiandae esse.
                            </p>

                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 segment-two">
                            <h2>Divinector</h2>
                            <ul>
                                <li><a href="#"></a>Event</li>
                                <li><a href="#"></a>Support</li>
                                <li><a href="#"></a>Hosting</li>
                                <li><a href="#"></a>Career</li>
                                <li><a href="#"></a>Blog</li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 segment-three">
                            <h2>Follow Us</h2>
                            <p>Please Follow Us On Social Media</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 segment-four">
                            <h2>Our Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At vero nobis
                                repellat totam eos distinctio, exercitationem veritatis, odit temporibus
                                eius expedita ratione quam mollitia impedit quo nemo ex dolor ullam.</p>
                            <form action="">
                                <input type="email">
                                <input type="submit" value="subscribe">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <p class="footer-bottom-text">All Right reserved by &copy; Our Shop.2019</p>
        </footer>







    </body>

</html>