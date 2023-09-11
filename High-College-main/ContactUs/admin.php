<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM admin WHERE `name` = '$username' AND `password` = '$password'";
    // echo "<pre>".print_r($sql);exit;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {

        echo "<script>alert('Login successful');</script>";
        header('Location: view.php');
    } else {
        echo "<script>alert('Invalid username or password');</script>";
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
            <h3 class="title">Admin Login</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="password" name="password" class="input" />
              <label for="">Password</label>
              <span>Password</span>
            </div>
            
            <input type="submit" name="submit" value="Send" class="btn" />
          
          

           <a href="../ContactUs/contact.php">CONTACT US</a>
         
       
</form>
</div>
</div>
<div style="text-align: center;
    margin-top: 2rem;
    padding: 1rem;
    padding-top: 2.5rem;
    
    color: #666;
    border-top: 0.1rem solid rgba(0, 0, 0, 0.1);"> created by <span>High College</span> | all rights reserved! </div>
<script src="app.js"></script>
</body>
</html>