<?php

include ('config.php');

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($connection, $_POST['email']);
   $pass = md5($_POST['password']);
   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($connection, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin.php');

      }elseif($row['type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>B-Boyz Login</title>

   <link rel="stylesheet" href="css/test.css">

   </head>
<body>
<div class="form-container">
   <form action="" method="post">
      <h1>login now</h1>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>