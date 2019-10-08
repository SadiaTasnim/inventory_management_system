
<?php
  require 'config/config.php';
  require 'config/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spreads</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/cb4a67ae30.js" crossorigin="anonymous"></script>

</head>

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
                                <a class="dropdown-item" href="#">Login</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Sign Up</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </nav>
    <div class="top-nav-bar">
        <div class="search-box">
            <img src="image/logo1.jpg" class="logo">
            <input type="text" class="form-control">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <div class="cart-bar mt-1">
            <ul>
                <li class="cart_basket"><a href="#"><i class="fas fa-shopping-basket"></i>cart</a></li>
            </ul>
        </div>
    </div>
   

<div class="container mt-5">
            <div class="row">
                <div style="background:#f1f1f1;height:auto;width:auto;" class="col-md-6">
                    
                    
                <?php
                        
                        getCatPro();
               ?>

           </div>  


</body>

</html>