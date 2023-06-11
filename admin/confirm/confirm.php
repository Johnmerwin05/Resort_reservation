<?php

 $conn=mysqli_connect("localhost","root","","resort");

 $id = $_GET['id'];

 
 $query = mysqli_query($conn, "INSERT INTO confirm_book Select * FROM book WHERE id = '$id'");
 $query = mysqli_query($conn, "DELETE FROM book WHERE id = '$id'");
 
    echo "<script>window.location.href='../email.php?id= $id';</script>";
 
 
?>