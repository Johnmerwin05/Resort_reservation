<?php

$connection = mysqli_connect("localhost", "root", "", "resort") or ('Query Failed');

   if(isset($_POST['send'])){
      $name = mysqli_real_escape_string($connection, $_POST ['name']);
      $email = mysqli_real_escape_string($connection, $_POST['email']);
      $phone = mysqli_real_escape_string($connection,$_POST['phone']);
      $address = mysqli_real_escape_string($connection,$_POST['address']);
      $location = mysqli_real_escape_string($connection,$_POST['location']);
      $guests = mysqli_real_escape_string($connection,$_POST['guests']);
      $arrivals = mysqli_real_escape_string($connection,$_POST['arrivals']);
      $leaving = mysqli_real_escape_string($connection,$_POST['leaving']);

      $query = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone, '$address', '$location', '$guests', '$arrivals', '$leaving');";
      $result = mysqli_query($connection, $query);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>