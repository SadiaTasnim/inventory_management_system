<?php
  require 'config/config.php';
  require 'config/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cart</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cartpage.css">
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


    <div class="container">
            <div class="row">
                    <div class="col-md-2 col-md-offset-1">
                            <h4>Product Name</h4>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                                <h4>Unit Price</h4>
                            </div>
                            <div class="col-md-2 col-md-offset-1">
                                    <h4>Total Price</h4>
                                </div>

                            <div class="col-md-2 col-md-offset-1">
                                    <h4>Remove</h4>
                                </div>

                        <div class="col-md-2 col-md-offset-1">
                                <h4>Quantity</h4>
                            </div>
                            
                               
            </div>
        </div>
    <?php
    
     $total = 0;
     $ip_add =getRealIpAddr();
     $sel_price ="select * from cart where ip_add = '$ip_add'";
     $run_price = mysqli_query($con,$sel_price);
     while($record=mysqli_fetch_array($run_price))
     {
       $pro_id = $record['p_id'];
       $pro_price="select * from products where product_id='$pro_id'";
       $run_pro_price = mysqli_query($con,$pro_price);
       while($p_price = mysqli_fetch_array($run_pro_price))
       {
         $product_price = array($p_price['product_price']);
         $product_title = $p_price['product_title'];
         $product_unitprice = $p_price['product_price'];
       
         $values = array_sum($product_price);
         $total +=$values;
 
       
 
    
    ?>

    <div class="container">
        <div class="row">
            
                    <div class="col-md-2 col-md-offset-1">
                            <h5> <?php echo $product_title ?> </h5>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                                <h5><?php echo $product_unitprice ." TK"; ?></h5>
                            </div>
                       
                            <div class="col-md-2 col-md-offset-1">
                                    <h5><?php echo $total ." TK"; ?></h5>
                                </div>
                                <div class="col-md-2 col-md-offset-1">
                                    <input type="Checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                </div>

                                <div class="col-md-2 col-md-offset-1">
                                <div class="box">
                                <input name = "qty" type="text" value="1" size = "3"/><br>
                                </div>
                            </div>
               
        </div>
    </div>
    <?php }
     } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Order Summary</h4>
                <h5>Total Amount: <?php echo  $total." TK"; ?></h5>
          
               
                <a href = "checkout.php"> <button type="button" class="btn btn-primary">Checkout</button> </a>

                 <input class="button" name="update" type="submit" id = "signup_btn" value="Remove"/>  

                <button type="button" class="btn btn-primary">Continue Shopping</button>
            </div>
        </div>
    </div>
   

<?php


echo '<script type ="text/javascript"> alert("ERROR") </script>';
if(isset($_POST['update']))
 {
  
     foreach($_POST['remove'] as $remove_id)
     {

        $delete_products = "delete from cart where p_id='$remove_id'";
        $run_delete = mysqli_query($con,$delete_products);
        
        if($run_delete)
        {
            echo "<script>window.open('cart.php','_self')</script>";
        }

     }
 }
?>

             
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