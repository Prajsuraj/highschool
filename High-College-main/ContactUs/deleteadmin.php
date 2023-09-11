<?php
include "config.php";
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM admin WHERE id = $id";

     $result =$conn->query($sql);

     if ($result == TRUE) {

        echo "<script>alert('Deleted successful');
        window.location.href = 'adminview.php';</script>";
        

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>