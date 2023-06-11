<?php

   $dbhost='localhost';
   $dbname='resort';
   $dbusername='root';
   $dbpass='';
   
       $mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
       
   
       if(isset($_POST['submit']))
       {
           $checkInDate = $_POST["checkInDate"];
           $timein = $_POST["timein"];
           $checkOutDate = $_POST["checkOutDate"];
           $timeout = $_POST["timeout"];
           $adults = $_POST["adults"];
           $children = $_POST["children"];
           $room = $_POST["room"];
           $tour = $_POST["tour"];
           $name = $_POST["name"];
           $address = $_POST["address"];
           $phone = $_POST["phone"];
           $email = $_POST["email"];


           $query = "SELECT * FROM `book` WHERE  
           `checkInDate` = '{$checkInDate}' AND
           `checkOutDate` = '{$checkOutDate}' AND
           `room` = '{$room}'";

                
                    $startDate = strtotime($_POST['checkInDate']);
                    $endDate = strtotime($_POST['checkOutDate']);
                
                    $interval = $endDate - $startDate;
                    $days = floor($interval / (60 * 60 * 24)+1);

                    if ($room == "Julia King Room"){
             
                        $total = $days * 2500;
               
                      }else if ($room == "Tala King Room"){
               
                        $total = $days * 2800;
               
                      }else if ($room == "Luntian King Room"){
               
                        $total = $days * 3800;
               
                      }else if ($room == "Ophelia King Room"){
               
                        $total = $days * 7000;
               
                      }else if ($room == "Transient King Room"){
               
                        $total = $days * 18000;
               
                      }else if ($room == "Whole resort"){
               
                        $total = $days * 65000;
               
                      }else {
               
                        echo "ERROR";
                      }

           $result = mysqli_query($mysqli, $query);



        if ( mysqli_num_rows ( $result ) > 0 )
        {
        
            echo '<script type="text/javascript">'  ."alert('Room not Available')" .'</script>';
            echo "<script type='text/javascript'>window.top.location='../room.php';</script>"; 

        }

        else
        {

            $result = mysqli_query($mysqli,"INSERT into book (checkInDate, timein, checkOutDate, timeout, days, Amount, adults, children, room, tour, name, address, phone, email) values ('$checkInDate','$timein','$checkOutDate','$timeout','$days','$total','$adults','$children','$room','$tour','$name','$address','$phone','$email')");
           
   
           if($result)
           {


                echo "<script type='text/javascript'>window.top.location='../email.php';</script>"; exit;               

           }
           else{
               echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
           }

        }
           
         
           
   

   
       }


?>