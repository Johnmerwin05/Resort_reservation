<?php

include ('config.php');

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>B-Boyz - Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h1>Hi <span>admin</span></h1>
      <h2>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h2>
      <p>to my B-boyz Waterpark Resort</p>
      <a href="login.php" class="btn">login</a>
      <a href="register.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>