<?php 


$conn=mysqli_connect("localhost","root","","resort");

$id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM announcement WHERE id = '$id'");

 header('location: ../announce.php?=1');

?>
