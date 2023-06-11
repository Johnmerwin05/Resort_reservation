<?php

include ('config.php');

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>B-Boyz - User</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user.css">



</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="user.php" class="logo">B-Boyz Waterpark and Recreation</a>

   <nav class="navbar">
      <a href="user.php">home</a>
      <a href="about.php">about us</a>
      <a href="contact us.php">contact us</a>
      <a href="book.php">reservation</a>
      <a href="login.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/pool_4.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, enjoy</span>
               <h3>welcome to b-boyz waterpark & recreation</h3>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/pool_3.jpg) no-repeat">
            <div class="content">
               <span></span>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/pool_5.jpg) no-repeat">
            <div class="content">
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/sun.png" alt="">
         <h3>daytime swimming</h3>
      </div>

      <div class="box">
         <img src="images/moon1.png" alt="">
         <h3>night time swimming</h3>
      </div>

      <div class="box">
         <img src="images/night time.png" alt="">
         <h3>overnight stay</h3>
      </div>


      <div class="box">
         <img src="images/videoke.png" alt="">
         <h3>karaoke rent</h3>
      </div>
   </div>

      <section class="home-offer">
   <div class="content">
      <a href="book.php" class="btn">visit now</a>
   </div>


   </div>
   </div>
      </section>
</section>


<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/Virtual tour_3.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <h2>let's find out and visit us</h2>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<section class="reviews">

   <h1 class="heading-title"> virtual tours </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
         <div class="swiper-slide slide">
         <div class="wrapper">
         <video autopause controls>
            <source src="videos/virtual tour.mp4" type="video/mp4" alt="">
         </div>
         </div>
         <div class="content">
        
      
            </video>
            </video>
            
       
            
         </div>

         <div class="swiper-slide slide">
         <div class="wrapper">
         <video autopause controls>
            <source src="videos/virtual tour2.mp4" type="video/mp4" alt="">
         </div>
         </div>
         <div class="content">
            <h3></h3>
            <p></p>

      
            </video>
            </video>
           
         </div>

         <div class="swiper-slide slide">
            
         <div class="wrapper">
         <video autopause controls>
            <source src="videos/virtual tour3.mp4" type="video/mp4" alt="">
         </div>
         </div>
         <div class="content">
            <h3></h3>
            <p></p>

      
            </video>
            </video>

         </div>

         <div class="swiper-slide slide">
            
         <div class="wrapper">
         <video autopause controls>
            <source src="videos/function hall.mp4" type="video/mp4" alt="">
         </div>
         </div>

      
            </video>
            </video>

   </div>

</section>
</video>

<section class="packages">

   <h1 class="heading-title">Caterings</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/caterings_1.jpg" alt="">
         </div>
         <div class="content">
          
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Caterings 1.jpg" alt="">
         </div>
         <div class="content">
           
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Caterings 6.jpg" alt="">
         </div>
         <div class="content">
            
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Caterings 3.jpg" alt="">
         </div>
         <div class="content">
          
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Caterings 5.jpg" alt="">
         </div>
         <div class="content">
           
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Caterings 2.jpg" alt="">
         </div>
         <div class="content">
           
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/catering1.jpg" alt="">
         </div>
         <div class="content">
          
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/catering_1.jpg" alt="">
         </div>
         <div class="content">
           
         </div>
      </div>

   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->


<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="user.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="book_form.php"> <i class="fas fa-angle-right"></i> reservation</a>
         <a href="contact us.php"> <i class="fas fa-angle-right"></i> contact us</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 0920-312-8929 </a>
         <a href="#"> <i class="fas fa-map"></i> Banga, Tinambac, Philippines, 4426 </a>
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> B-boyz Waterpark and Recreation</a>
      </div>

   </div>>

   <div class="credit">  <span></span>  all rights reserved! </div>

</section>

<!-- footer section ends -->









<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/user.js"></script>



</body>
</html>