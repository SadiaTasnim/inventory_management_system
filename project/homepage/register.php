<?php
  require 'config/config.php'
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>

<link rel="stylesheet" href="css/login.css">

</head>
<body style = " background: linear-gradient(to right, #f7ca66 0%, white 100%) ">

<div id = "main-wrapper">
    <center>
        <h2 class="text" > Register here !!</h2>
        <p class="text" >Please insert your name and password to register</p>
        <img src="image/register.jpg" class="loginimage"/>
    </center>
   <form class = "myform"   action="register.php" method = "post">
          <label class="text"><b> Username :</b> </label>
          <input name="username" type="text" class="inputvalues1" placeholder="Type username"required/><br> 

          <label class="text"> <b>Password : </b> </label>
          <input name="password" type="password" class="inputvalues1" placeholder="Type password"required/><br>

          <label class="text"> <b>Confirm Password : </b> </label>
          <input name="cpassword" type="password" class="inputvalues1" placeholder="Type password again"/><br>

            <input class="button" name="submit_btn" type="submit" id = "signup_btn" value="Sign Up"/> <br>
           <a href="login.php"> <input class="button" type="button" id = "back_btn" value="<<Back"/></a>
         
           <a href="homepage.php"> <input class="button" type="button" id = "back_btn" value="Homepage"/></a>
           
     </form>
<?php
if(isset($_POST['submit_btn'])) //a predeclaired global variable. submit button is clicked or not
  {
   // echo '<script type ="text/javascript"> alert("Sign Up Button CLicked") </script>';
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);

  

   if($password==$cpassword)
   {
     $query = "select * from user where username = '$username'"; //check if the name is inserted before
     $query_run = mysqli_query($con,$query); //pass conection and query 

     if(mysqli_num_rows($query_run)>0)//how many no of rows are being return if the query is excecuted 
     {
       //there is already a user
      
       echo '<script type ="text/javascript"> alert("There is already a user in this name") </script>'; 
       
     }

     else{
       $query = "insert into  user values ('$username','$password')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
         echo '<script type ="text/javascript"> alert("User registered.Go to log in page") </script>'; // sob thik thakle
       }
       else
       {
         echo '<script type ="text/javascript"> alert("ERROR") </script>'; //server crash korle
       }
     }

   }
   else{
    echo '<script type ="text/javascript"> alert("password and confirm password does not match") </script>'; //password alada thakle
   }




  }

?>

</div>

    
</body>
</html>