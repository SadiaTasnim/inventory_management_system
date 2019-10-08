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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                        <a class="nav-link" href="#">Welcome Guest</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Items in your list : </a>
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
                        <li class="cart_basket"><a href="#"><i class="fas fa-shopping-basket"></i>cart</a></li>
                    </ul>
                </div>
            </div>

                   
                 

             

        <!-- featured -->

  <div class="container">
        <div class="row">
             <?php 
             
             if(isset($_GET['pro_id']))
             {


             $product_id = $_GET['pro_id'];

             

             $get_products = "select * from products where product_id='$product_id'";
            $run_products = mysqli_query($con,$get_products);

  

    while($row_products=mysqli_fetch_array($run_products))
    {
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_cat = $row_products['cat_id'];
        $pro_desc = $row_products['product_desc'];
        $pro_price = $row_products['product_price'];
        $pro_img = $row_products['product_img'];
        $pro_desc = $row_products['product_desc'];

      echo"
          <div class='col-md-12' >
              <div class='card'>
                  <div class='inner'>
                    <a  href='#'> <img src='insert image/$pro_img' class='card-img-top'></a>
                  </div>

                  <div class='card-body text-center'>

                      <h6 class='card-title'><b>$pro_title</b></h6>

                      <p class='card-text' style='background:#FFD66A;height:auto;width:auto;'>$pro_desc</p>


                      <h5 class='card-text'>$pro_price TK</h5>
                      <a href='homepage.php?add_cart=$pro_id' class='btn btn-success'>Add to Cart</a>
                  </div>
              </div>
          </div>
      
            
      
      ";
    }
}       
             ?> 
        </div>



           








    </body>

</html>