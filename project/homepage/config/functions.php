<?php
  require 'config/config.php';
//funtion for getting id address

  function getRealIpAddr()
  {
    if ( !empty( $_SERVER['HTTP_CLIENT_IP'] ) )
    {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
    //to check ip passed from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }


 function cart()
 {
   global $con;
   if(isset($_GET['add_cart']))
   {
     $ip_add =getRealIpAddr();
     $p_id = $_GET['add_cart'];

     $check_pro = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
     $result = mysqli_query($con,$check_pro);
     $countno =mysqli_num_rows($result);
     if($countno>0)
     {
       echo "";
     }
     else {
       $q = "insert into cart (p_id,ip_add) values ('$p_id','$ip_add')";
       $run_q = mysqli_query($con,$q);
       echo "<script>window.open('homepage.php','_self')</script>";
     }

   }
 }


  function items()
  {
    global $con;
    $ip_add =getRealIpAddr();
    if(isset($_GET['add_cart']))
    {

      $get_items = "select * from cart where ip_add='$ip_add'";
      $run_items = mysqli_query($con,$get_items);
      $count_items = mysqli_num_rows($run_items);
    }
    else{
      $get_items = "select * from cart where ip_add='$ip_add'";
      $run_items = mysqli_query($con,$get_items);
      $count_items = mysqli_num_rows($run_items);

    }
    echo $count_items;
  }


  function total_price()
  {

    global $con;
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
        $values = array_sum($product_price);
        $total +=$values;

      }
    }

   echo  $total." TK";

  }

  function getPro()
  {
    global $con;


    if(!isset($_GET['cat']))
    {

   
    $get_products = "select * from products order by rand() LIMIT 0,6";
    $run_products = mysqli_query($con,$get_products);

  

    while($row_products=mysqli_fetch_array($run_products))
    {
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_cat = $row_products['cat_id'];
        $pro_desc = $row_products['product_desc'];
        $pro_price = $row_products['product_price'];
        $pro_img = $row_products['product_img'];

      echo"
          <div class='col-md-4'>
              <div class='card'>
                  <div class='inner'>
                    <a  href='details.php?pro_id=$pro_id'> <img src='insert image/$pro_img' class='card-img-top'></a>
                  </div>

                  <div class='card-body text-center'>
                      <h5 class='card-title'>$pro_title</h5>
                      <h5 class='card-text'>$pro_price TK</h5>
                      <a href='homepage.php?add_cart=$pro_id' class='btn btn-success'>Add to Cart</a>
                  </div>
              </div>
          </div>
      
            
      
      ";
    }
   
  }
   
  }



  function getCatPro()
  {
    global $con;


    if(isset($_GET['cat']))
    {

     $cat_id = $_GET['cat'];

   
    $get_cat_pro = "select * from products where cat_id='$cat_id'";
    $run_cat_pro = mysqli_query($con,$get_cat_pro);
     
    $count = mysqli_num_rows($run_cat_pro);

    if($count==0)
    {
      echo "<h4> no products found in this category</h4>";
    }
  

    while($row_cat_pro=mysqli_fetch_array($run_cat_pro))
    {
        $pro_id = $row_cat_pro['product_id'];
        $pro_title = $row_cat_pro['product_title'];
        $pro_cat = $row_cat_pro['cat_id'];
        $pro_desc = $row_cat_pro['product_desc'];
        $pro_price = $row_cat_pro['product_price'];
        $pro_img = $row_cat_pro['product_img'];

      echo"
          <div class='col-md-4'>
              <div class='card'>
                  <div class='inner'>
                    <a  href='details.php?pro_id=$pro_id'> <img src='insert image/$pro_img' class='card-img-top'></a>
                  </div>

                  <div class='card-body text-center'>
                      <h5 class='card-title'>$pro_title</h5>
                      <h5 class='card-text'>$pro_price TK</h5>
                      <a href='homepage.php?add_cart=$pro_id' class='btn btn-success'>Add to Cart</a>
                  </div>
              </div>
          </div>
      
            
      
      ";
    }
   
  }
   
  }







   function getCat ()
   {
    global $con;

    $get_cats = "select * from categories";
                        $run_cats = mysqli_query($con,$get_cats);
                
                        while($row_cats = mysqli_fetch_array($run_cats)){
                            $cat_id = $row_cats['cat_id'];         
                            $cat_title = $row_cats['cat_title'];
                        echo "<li class = 'menu'><a  class = 'menu' href='cat_selected.php?cat=$cat_id'>   $cat_title   </a></li>";
                           }

   }








   






?>



