<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/checkout.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/cb4a67ae30.js" crossorigin="anonymous"></script>

</head>

<body>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home</a>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Wishlist</a>
                    </li>
                </ul>
            </div>
        </nav>
        


            <div class="container">
                <div class="row">
                        
                               
                        <form>
                                <div class="form-row">
                                  <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="Your name" required>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Email</label>
                                    <input type="email" class="form-control" id="validationDefault02" placeholder="example@gmail.com" required>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <label for="validationDefaultUsername">Username</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                      </div>
                                      <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                  </div>
                                </div> 
                                <div class="form-row">
                                  <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Address</label>
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Valid Address" required>
                                  </div>
                                  <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">City</label>
                                    <input type="text" class="form-control" id="validationDefault04" placeholder="City" required>
                                  </div>
                                  <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">Contact No</label>
                                    <input type="number" class="form-control" id="validationDefault05" placeholder="Contact No" required>
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                      Agree to terms and conditions
                                    </label>
                                  </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                              </form>

                </div>
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