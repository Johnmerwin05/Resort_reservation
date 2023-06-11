<?php
session_start();

if ($_SESSION["status"] != true){

    header("Location: t/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script language="javascript" type="text/javascript">
window.history.forward();
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="icon" href="../img/core-img/icon.png">

    <!-- Custom fonts for this template-->
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>

.pending {
font-size: 13px;
font-weight: bold;
padding-left: 10px;
padding-right: 10px;
border-radius: 10px;
border: none;
text-align: center;
background: #ff9800;
color: white;
}

</style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-umbrella-beach"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Drim's<sup style="font-size: 10px;" class="ml-2">Joy</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

                        <!-- Heading -->
                        <div class="sidebar-heading">
                Bookings
            </div>


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.php">
        <i class="fas fa-fw fa-info"></i>
        <span>Reservations</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="confirm_booked.php">
        <i class="fas fa-fw fa-book"></i>
        <span>Confirm Registrations</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="payment.php">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Payment</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="users.php">
        <i class="fas fa-fw fa-person"></i>
        <span>Users</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="admins.php">
        <i class="fas fa-fw fa-lock"></i>
        <span>Admins</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="archive.php">
        <i class="fas fa-fw fa-box"></i>
        <span>Archive</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="announce.php">
        <i class="fas fa-fw fa-message"></i>
        <span>Announcement</span></a>
</li>
        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


            



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>




                        

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pending Reservations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $server_name = "localhost";
                                            $db_username = "root";
                                            $db_password = "";
                                            $db_name = "resort";
                                            
                                            $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
                
                                                $query = "SELECT ID FROM book ORDER BY ID";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row.'</h4>';
                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Confirm Reservations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $server_name = "localhost";
                                            $db_username = "root";
                                            $db_password = "";
                                            $db_name = "resort";
                                            
                                            $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
                
                                                $query = "SELECT ID FROM confirm_book ORDER BY ID";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row.'</h4>';
                                            ?>    
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Active Users
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                            <?php
                                            $server_name = "localhost";
                                            $db_username = "root";
                                            $db_password = "";
                                            $db_name = "resort";
                                            
                                            $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
                
                                                $query = "SELECT ID FROM usertable ORDER BY ID"; 
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row.'</h4>';
                                            ?>  
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Archive</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $server_name = "localhost";
                                            $db_username = "root";
                                            $db_password = "";
                                            $db_name = "resort";
                                            
                                            $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
                
                                                $query = "SELECT ID FROM archive ORDER BY ID";
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row.'</h4>';
                                            ?>       
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Recent Reservations</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Reservation Informations</h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="overflow-x: scroll;">
 
                                    <thead>
                                        <tr>
                                        <th>ID no.</th>
                                            <th>Full Name</th>
                                            <th>Check-in & time-in</th>
                                            <th>Check-out & time-out</th>
                                            <th>Amount</th>
                                            <th>Adults</th>
                                            <th>Childrens</th>
                                            <th>Room</th>
                                            <th>Tour type</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                <?php 
                                $bill = 1;
                                $conn=mysqli_connect("localhost","root","","resort"); //database connection  
                                //hostname, username, password, database name  
                                if ($conn) {

                                    //echo "Connection successfully";  
                                }else{  
                                    echo "Error";  
                                }  
                                $query="SELECT * from book";  
                                $connect=mysqli_query($conn,$query);  
                                $num=mysqli_num_rows($connect);
                                                    
                                                    
                                                if ($num>0) {  
                                                    while($data=mysqli_fetch_assoc($connect)){

                                                        $g1 = strtotime($data['checkInDate']);
                                                        $gg1 = date('F jS Y', $g1);
                                                        $g2 = strtotime($data['checkOutDate']);
                                                        $gg2 = date('F jS Y', $g2);
                                                        
                                                        
                                                        ?>

                                                        

                                                            <tr style="font-size: 14px;color: #2B547E;font-weight:bold;padding-left: 15%;">  
                                                            <td style="width: 10%;"><?= $bill++; ?></td>
                                                            <td style="width: 25%;"><?= $data['name']; ?></td>
                                                            <td style="width: 25%;"><?= $gg1 ?> at <?= $data['timein']; ?></td>
                                                            <td style="width: 25%;"><?= $gg2 ?> at <?= $data['timeout']; ?></td>
                                                            <td><?= $data['Amount']; ?></td>
                                                            <td><?= $data['adults']; ?></td>
                                                            <td><?= $data['children']?></td>
                                                            <td style="width: 33%;"><?= $data['room']; ?></td>
                                                            <td style="width: 25%;"><?= $data['tour']; ?></td>
                                                            <td style="text-align: center;"><button class="pending">Pending</button></td>

                                                         <?php
                                                            
                                                    }  
                                                }  
                                        ?>  
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                                        
                                        </div>
                                    </div>
                                </div>


                                
            

        </div>
        <!-- End of Content Wrapper -->


        

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="t/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>