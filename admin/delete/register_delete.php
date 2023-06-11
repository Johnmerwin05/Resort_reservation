<?php 


 $conn=mysqli_connect("localhost","root","","resort");

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM usertable WHERE id = '$id'");

 header('location: ../users.php?=1');

?>
