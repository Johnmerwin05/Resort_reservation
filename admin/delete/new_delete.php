<?php 


 $conn=mysqli_connect("localhost","root","","resort");

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM book WHERE id = '$id'");

 header('location: ../tables.php?=1');

?>