
<?php
  require 'config/config.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>Login page</title>


<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>
<body style = " background: linear-gradient(to right, #7cccde 0%, white 80%) ;">

<div id = "main-wrapper">
    <center>
        <h2 class="text" ><b>Log in here!!</b></h2>
        <p class="text" >Please insert your username and password</p>
        <img src="image/login.jpg" class="loginimage"/>
    </center>
   <form class = "myform" action="login.php" method = "post">
          <label class="text"><b> Username :</b> </label>
          <input name = "username" type="text" class="inputvalues" placeholder="Type username" required/><br>
          <label class="text"> <b>Password : </b> </label>
          <input name="password" type="password" class="inputvalues" placeholder="Type password" required/><br>
            <input class="button" name="login" type="submit" id = "login_btn" value="Login"/> <br>
            <a href="register.php"><input class="button" type="button" id = "register_btn" value="Register"/></a>
    
            <a href="homepage.php"><input class="button" type="button" id = "register_btn" value="Homepage"/></a>
           
     </form>
<?php
  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //encryptedpassword
    $md5password = md5($password);

    $query = "select * from user where username = '$username' AND password='$md5password'"; //check if the name is inserted before
     $query_run = mysqli_query($con,$query);

     if(mysqli_num_rows($query_run)>0)//how many no of rows are being return if the query is excecuted 
     {
       //there is a user 
       $_SESSION['username'] = $username; //global variable which will last throughout the session of the browser
       header('location:../homepage/homepage.php');
     }
     else{
     

        //there is already a user 
        echo '<script type ="text/javascript"> alert("Invalid user name or password") </script>'; 
      
         }
  }
?>

</div>

    
</body>
</html>