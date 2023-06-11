<?php 


 $conn=mysqli_connect("localhost","root","","resort");

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM admins WHERE id = '$id'");

 header('location: ../admins.php?=1');

?>
