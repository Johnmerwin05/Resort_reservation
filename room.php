<?php
session_start();
require "login/connection.php";
if(!isset($_SESSION['email'])) 
{ 
    header("location:login/home.php");
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>DrimJoy's Beach Resort</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/icon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.4/datepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
        

        <script>


        var dateToday = new Date(); 
        $( function() {
          $( "#datepicker1" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat:'dd-M-yy',
            //   minDate: dateToday,
            onClose: function (selected) {
              if(selected.length <= 0) {
                  // selected is empty
                  $("#end").datepicker('disable');
              } else {
                  $("#end").datepicker('enable');
              }
              $("#end").datepicker("option", "minDate", selected);
            }
          });
          $( "#end" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat:'dd-M-yy',
            // minDate: dateToday,
            onClose: function (selected) {
              if(selected.length <= 0) {
                  // selected is empty
                  $("#datepicker1").datepicker('disable');
              } else {
                  $("#datepicker1").datepicker('enable');
              }
              $("#datepicker1").datepicker("option", "maxDate", selected);
            }
          });
        }); 

        </script>

    

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>0927 534 5941</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>drimjoy@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                            <a href="https://www.facebook.com/drimjoybeachresort"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://instagram.com/drimjoybeachresort?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/Drim_main.png" alt="" width="145" ></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.html">Home</a></li>
                                    <li><a href="room.php">Rooms</a>
                                        <ul class="dropdown">
                                            <li><a href="julia.html">- Julia Room</a></li>
                                            <li><a href="tala.html">- Tala Room</a></li>
                                            <li><a href="luntian.html">- Luntian Room</a></li>
                                            <li><a href="Ophelia.html">- Ophelia Room</a></li>
                                            <li><a href="transient.html">- Transient Room</a></li>
                                            <li><a href="cottage.html">- Tent</a></li>
                                            <li><a href="tent.html">- Cottages</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./covid.html">COVID</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                    <li><a href="#">More</a>
                                        <ul class="dropdown">
                                            <li><a href="./amenities.html">- Packges</a></li>
                                            <li><a href="./reserve.php">- Calendar</a></li>
                                            <li><a href="./recommend.html">- Reviews</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="room.php">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/dj1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Room</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <br>

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/r6.jpg" alt="" >
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Julia Room</h2>
                            <h4>₱2,500.00 <span>/ Night</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>30 ft</span></h6>
                                <h6>Capacity: <span>Max persion 2</span></h6>
                                <h6>Bed: <span>Double beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                            <a href="julia.html" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/r2.jpg" alt="" >
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Tala Room</h2>
                            <h4>₱2,800.00 <span>/ Night</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>60 ft</span></h6>
                                <h6>Capacity: <span>Max persion 4</span></h6>
                                <h6>Bed: <span>2 Double Beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                            <a href="tala.html" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/r3.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Luntian Room</h2>
                            <h4>₱3,800.00 <span>/ Night</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>80 ft</span></h6>
                                <h6>Capacity: <span>Max persion 6</span></h6>
                                <h6>Bed: <span>beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                            <a href="luntian.html" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/r4.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Ophelia Room</h2>
                            <h4>₱7,000.00 <span>/ Night</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>120 ft</span></h6>
                                <h6>Capacity: <span>Max persion 10</span></h6>
                                <h6>Bed: <span>5 Double Beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                            <a href="Ophelia.html" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/r5.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Transient Room</h2>
                            <h4>₱18,000.00 <span>/ Night</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>220 ft</span></h6>
                                <h6>Capacity: <span>Max persion 25</span></h6>
                                <h6>Bed: <span>6 Kings Beds, 2 Double Beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                            <a href="transient.html" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                     <!-- Single Room Area -->
                     <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/r5.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Whole resort</h2>
                            <h4>₱65,000.00 <span>/ 24hr</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>220 ft</span></h6>
                                <h6>Capacity: <span>Max persion 65</span></h6>
                                <h6>Bed: <span>6 Kings Beds, 2 Double Beds</span></h6>
                                <h6>Services: <span>Wifi, television ...</span></h6>
                            </div>
                        </div>
                    </div>                   
<br><br>
                
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="book_database/book.php" method="post">

                        <div class="terms-box">
                        <div class="terms-text">
                            <h2>Rules and Policy </h2>
                            <p>Greetings User</p>
                            <p>Please present valid ID upon check - in. STRICTLY PAY UPON CHECK - IN.</p>

                            <p>Official check-in is at 12:00 pm and check-out at 11 am in the morning.</p>

                            <p>The guests is responsible for any damages or loss to the assigned room and to the hotel facilities caused by guests or guest’s invitees.</p>

                            <p>A person who negligently or intentionally causes damage to the hotel of any furniture within the hotel shall be liable for damages. Any items lost or damages in the room will be charged accordingly.</p>

                            <p>Firearms, deadly weapons, and drugs are strictly prohibited in the hotel.</p>
                            <p>Personal belongings left or abandoned in the room shall be held safe keeping for a period of (60) days. </p>
                            <p>Strictly no smoking inside the room. A smoking fine of Php 2000 will be imposed.</p>
                            <h2>Cancellation Policy </h2>
                            <p>If cancelled 14-7 days before arrival date, 100% of the deposit will be refunded back to you.</p>
                            <p>If cancelled less than 7 days before the arrival date, the full deposit amount held will be retained as a cancellation fee.</p>
                    

            </div>
    </div>
<br><br>
                            <div class="form-group mb-30">
                                <label style="color: #5e5e5e;">Date & Time</label>
                                <div>
                                    <div class="row no-gutters">
                                        <div class="col-6 mb-2">
                                            <input type="text" class="input-small form-control"  name="checkInDate" id="datepicker1" placeholder="Check In">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <input type="time" class="input-small form-control"  name="timein" id="datepicker1" placeholder="Time In">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <input type="text" class="input-small form-control" name="checkOutDate" id="end" placeholder="Check Out">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <input type="time" class="input-small form-control"  name="timeout" id="datepicker1" placeholder="Time Out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests" style="color: #5e5e5e;">Guests</label>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="children" style="color: #5e5e5e; font-size:small">Adults</label>
                                        <input type="number" name="adults" id="guests" class="form-control" required></input>
                                    </div>
                                    <div class="col-6">
                                        <label for="children" style="color: #5e5e5e; font-size:small">Children</label>
                                        <input type="number" name="children" id="children" class="form-control" required></input>
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="children" style="color: #5e5e5e; font-size:small">Full Name</label>
                                        <input name="name" id="guests" class="form-control" required></input>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label for="children" style="color: #5e5e5e; font-size:small">Complete Address</label>
                                        <input name="address" id="children" class="form-control" required></input>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label for="children" style="color: #5e5e5e; font-size:small">Phone Number</label>
                                        <input name="phone" id="children" class="form-control" required></input>
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="children" style="color: #5e5e5e; font-size:small">Email Address</label>
                                        <input name="email" id="children" class="form-control" required></input>
                                    </div>

                                    
                                </div>
                            </div>


                            <div class="form-group mb-30">
                                <label for="guests" style="color: #5e5e5e;">Room & Tour type</label>
                                <div class="row">
                                    <div class="col-7">
                                        <select name="room" id="guests" class="form-control">
                                            <option value="adults">Rooms</option>
                                            <option value="Julia Room">Julia Room</option>
                                            <option value="Tala Room">Tala Room</option>
                                            <option value="Luntian Room">Luntian Room</option>
                                            <option value="Ophelia Room">Ophelia Room</option>
                                            <option value="Transient Room">Transient Room</option>
                                            <option value="Whole resort">Whole resort</option>
                                        </select>
                                    </div>

                                    <div class="col-5">
                                        <select name="tour" id="guests" class="form-control">
                                            <option value="adults">Tour type</option>
                                            <option value="Day tour">Day tour</option>
                                            <option value="Night tour">Night tour</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name ="submit" class="btn roberto-btn w-100">Check Available</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->



    <br><br>

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            

                            <h4>(+63) 927 534 5941</h4>
                            <span>drimjoy@gmail.com</span>
                            <span>Lot 5 Taniqui Street Barangay 4231, Nasugbu, Batangas</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Our Blog</h5>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Who’s up for a bit of tropical distraction</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2020</span>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Goyo, our beach bodyguard slash rottweiler is on a roll!! </a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2020</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Room</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Career</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>

                            <!-- Newsletter Form -->
                            <form action="index.html" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> DrimJoy Beach Resort
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="https://www.facebook.com/drimjoybeachresort"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://instagram.com/drimjoybeachresort?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>