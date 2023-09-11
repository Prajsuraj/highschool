<?php
include "config.php";

if(isset($_POST['submit'])){

	$username = $_POST["name"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

	$sql="INSERT INTO admin set `name` = '".$username."',`password` = '".$password."',`phone`='".$phone."',`email` = '".$email."'";

	$result=$conn->query($sql);
	if($result==TRUE){
		echo "<script>alert('New Admin created');
    window.location.href = 'view.php';
    </script>";
		
		
	}
	else{
	echo "<script>alert('please enter the valid detail');</script>";
	}
	$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>High College | Contact Us</title>
    <link rel="shortcut icon" type="images" href="images/logo.jpg">
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <!-- <link rel="stylesheet" href="../css/style.css" /> -->
  </head>
<body >
<header style="
    font-size: 30px;
    padding: 0 9%;
    background: #224bcf;">

<a href="../index.html" class="logo" style="color:#fff"> <i class="fas fa-user-graduate"></i> High College </a>



</header>
  
  <div class="container">
    <div style="background-color: #149279;">
<!--           <span class="circle one"></span>
          <span class="circle two"></span> -->

<form action="" method="post" autocomplete="off" >
<h3 class="title">Admin Register</h3>
<div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="password" name="password" class="input" />
              <label for="">Password</label>
              <span>Passeord</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            
            <input type="submit" name="submit" value="Send" class="btn" />
          
          

           <a href="../ContactUs/contact.php">CONTACT US</a>
         
       
</form>
</div>
</div>

<script src="app.js"></script>
</body>
</html>