<?php
  require 'config/config.php'
?>
<!DOCTYPE html>


<html>
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/juc0lpjhg0yhgj7sq7cy6yrie9ujxk3brcnty45zd2xwm0cn/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body bgcolor = "#91F6B2">
    <form method="post" action = "insert_product.php" enctype = "multipart/form-data" >
      <table bgcolor = "#91C4F6"   width = "700"  align = "center" border = "1";>
          <tr align = "center">
              <td colspan = "2"><h1>Insert new product</h1></td>
              <tr>
                  <td align = "center"><b>Product Title</></td>
                  <td><input type="text" name = "product_title" size = "50"></td>
              </tr>

              <tr>
                  <td align = "center" ><b>Product Category</></td>
                  <td><select name="product_cat"  >
                      <option>Select a Category</option>
                      <?php
                        $sel_cats = "select * from categories";
                        $run_cats = mysqli_query($con,$sel_cats);
                
                        while($row_cats = mysqli_fetch_array($run_cats)){
                            $cat_id = $row_cats['cat_id'];         
                            $cat_title = $row_cats['cat_title'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                           }
                       ?>
                  </select></td>
              </tr>

              <tr>
              <td align = "center"><b>Product Image</></td>
                  <td><input type="file" name = "product_img"></td>
              </tr>

              <tr>
                  <td align = "center"><b>Product Price</></td>
                  <td><input type="text" name = "product_price" size = "50" ></td>
              </tr>

              <tr>
                   <td align = "center"><b>Product Description</></td>
                  <td><textarea name="product_desc"  cols="52" rows="10"></textarea></td>
              </tr>

              <tr>
                  <td align = "center"><b>Product Keywords</></td>
                  <td><input type="text" name = "product_keywords" size = "50"></td>
              </tr>

              <tr align = "center">
                  <td colspan = "2"><input type="submit" name = "insert_product"></td>
              </tr>



          </tr>

</form>
</body>
</html>

<?php
if(isset($_POST['insert_product']))
{
    //text data variable
     $product_title = $_POST['product_title'];
     $product_cat = $_POST['product_cat'];
     $product_price = $_POST['product_price'];
     $product_desc = $_POST['product_desc'];
     $status = 'on';
     $product_keywords = $_POST['product_keywords'];
     //image
     $product_img = $_FILES['product_img']['name'];

     //image temp names
    $temp_name =$_FILES['product_img'] ['tmp_name'];

    if($product_title=='' OR  $product_cat=='' OR $product_price=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img=='')
    {
        echo"<script>alert ('Please fill all the fields!') </script>";
        exit();
    }
    else
    {
        //uplosding image to its folder
        move_uploaded_file($temp_name,"insert image /$product_img");
    }

    $insert_product = "insert into products 
    (cat_id,date,product_title,product_img,product_price,product_desc,status) 
    values ('$product_cat',NOW(),'$product_title','$product_img','$product_price','$product_desc','$status')";
    $run_product = mysqli_query($con,$insert_product);
    if($run_product)
    {
        echo"<script>alert ('Product inserted successfully') </script>";

    }

}


?>