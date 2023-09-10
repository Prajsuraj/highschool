<?php
include "config.php";
if(isset($_POST['edit'])){
    $id = $_GET['id'];
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Use prepared statement to prevent SQL injection
    $sql = "UPDATE school SET `name`=?, `email`=?, `phone`=?, `message`=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $username, $email, $phone, $message, $id);
    if ($stmt->execute()) {
        echo "<script>alert('Login successful');</script>";
        header('Location: view.php');
    } else {
        echo "<script>alert('Error updating record: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
if (isset($_POST['delete'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM school WHERE id = $id";

     $result =$conn->query($sql);

     if ($result == TRUE) {

        echo "<script>alert('Record delete successfully');</script>";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM school WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['message'];
       
        $id = $row['id'];
        // header('Location: view.php');
    } else {
        header('Location: view.php');
        exit; // Stop further execution
    }
    
    $stmt->close();
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

<a class="logo" style="color:#fff"> <i class="fas fa-user-graduate"></i> High College </a>

</header>
  
  <div class="container">
    <div style="background-color: #149279;">
<!--           <span class="circle one"></span>
          <span class="circle two"></span> -->

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div >
            <label for="">Username</label>
              <input type="text" name="name" class="input" value="<?php echo $name;?>"/>
              
              
            </div>
            <div>
            <label for="">Email</label>
              <input type="email" name="email" class="input" value="<?php echo $email;?>"/>
              
              
            </div>
            <div>
            <label for="">Phone</label>
              <input type="tel" name="phone" class="input" value="<?php echo $phone;?>"/>
              
              
            </div>
            <div>
            <label for="">Message</label>
            <input type="text" name="message" class="input" value="<?php echo $message;?>"/>
              
            
            </div>
            <input type="submit" name="edit" value="update" class="btn" />
            <input type="submit" name="delete" value="delete" class="btn" />
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