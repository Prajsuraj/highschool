<?php
include "config.php";
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM school WHERE id = $id";

     $result =$conn->query($sql);

     if ($result == TRUE) {

        echo "<script>alert('Deleted successful');
        window.location.href = 'view.php';</script>";
        

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>