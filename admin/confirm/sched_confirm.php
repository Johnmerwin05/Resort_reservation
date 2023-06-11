    
<?php

 $conn=mysqli_connect("localhost","root","","resort");

 $id = $_GET['id'];

 
 $query = mysqli_query($conn, "INSERT INTO archive Select * FROM confirm_book WHERE id = '$id'");
 $query = mysqli_query($conn, "DELETE FROM confirm_book WHERE id = '$id'");
 
 header('location: ../confirm_booked.php?=1');
 

?>