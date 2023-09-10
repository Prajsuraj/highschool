<?php
include "config.php";
$sql="select * from school where 1";
$result=mysqli_query($conn,$sql);
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

<a href="../index.html" style="  color:#fff;float: right;">LOGOUT</a>

</header>
  <table>
    <thead>
    <tr style="background-color:blue; color: yellow;">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Edit</th>
</tr>
</thead>
<tbody>
					<?php
					while($row=mysqli_fetch_assoc($result)){
						?><tr>
						<th><?php echo $row['id'];?></th>
						<th><?php echo $row['name'];?></th>
						<th><?php echo $row['email'];?></th>
						<th><?php echo $row['phone'];?></th>
						<th><?php echo $row['message'];?></th>
						<th><a href="edit.php?id=<?php echo $row['id'];?>">edit</a>&nbsp<a href="delete.php?id=<?php echo $row['id'];?>">delete</a></th>
					</tr>
						<?php
					}
					?>
				
					
				</tr>
				</tbody>
</table>
            
<div style="text-align: center;
    margin-top: 2rem;
    padding: 1rem;
    padding-top: 2.5rem;
    
    color: #666;
    border-top: 0.1rem solid rgba(0, 0, 0, 0.1);"> created by <span>High College</span> | all rights reserved! </div>
<script src="app.js"></script>
</body>
</html>