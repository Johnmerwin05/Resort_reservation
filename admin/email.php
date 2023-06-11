<?php 

$conn=mysqli_connect("localhost","root","","resort");

$id = $_GET['id'];

$query="SELECT * from confirm_book WHERE id = '$id'";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);
                                
                                                    
if ($num>0) {  
while($data=mysqli_fetch_assoc($connect)){

   $name = $data['name'];
   $timein = date("g:iA", strtotime($data['timein']));
   $timeout = date("g:iA", strtotime($data['timeout']));
   $checkInDate = $data['checkInDate'];
   $checkOutDate = $data['checkOutDate'];
   $adults = $data['adults'];
   $children = $data['children'];
   $room = $data['room'];
   $email = $data['email'];
   $tour = $data['tour'];

 
   if(mysqli_num_rows($connect)> 0 ){

      foreach($connect as $row)
      
          $startDate = strtotime($row['checkInDate']);
          $endDate = strtotime($row['checkOutDate']);
      
          $interval = $endDate - $startDate;
          $days = floor($interval / (60 * 60 * 24)+1);
   
          if ($row['room'] == "Julia King Room"){
    
            $total = $days * 2500;
   
          }else if ($row['room'] == "Tala King Room"){
   
            $total = $days * 2800;
   
          }else if ($row['room'] == "Luntian King Room"){
   
            $total = $days * 3800;
   
          }else if ($row['room'] == "Ophelia King Room"){
   
            $total = $days * 7000;
   
          }else if ($row['room'] == "Transient King Room"){
   
            $total = $days * 18000;
   
          }else if ($row['room'] == "Whole resort"){
   
            $total = $days * 65000;
   
          }else {
   
            echo "ERROR";
          }
                     
      {


         $to = "$email";
         $subject = "Greetings from DrimJoy's";
         
         $message = "<b>Dear $name,</b><br><br>"; 
         $message .= "<b>Thank you for making a reservation in our resort!</b><br><br>";
         $message .= "<b>We would like to inform you that your reservation has been successfully made, and we look forward to your visit.</b><br><br>";
         $message .= "<b>Please let us know if there is anything we can do to make your stay more enjoyable.</b><br><br><br>";

         $message .= "<b>Reservation summary <br><br><br>";
         $message .= "<b>Date & Time of Check-in: $timein of $checkInDate <br>";
         $message .= "<b>Date & Time of Check-out: $timeout of $checkOutDate <br>";
         $message .= "<b>Number of Adults: $adults<br>";
         $message .= "<b>Number of Children: $children<br>";
         $message .= "<b>Type of Room: $room<br>";
         $message .= "<b><h2></h2>Amount to Pay: $total</h2><br><br>";
         $message .= "<b>For Online payment please direct to this link https://invoice.xendit.co/od/awdad and settle your payment, please provide your reference number.<br>";
         $message .= "<b>For cash payment, call 0927 534 5941 for payment assistance</b><br><br><br><br><br><br><br><br><br><br><br><br>";
         $message .= "<b>DrimJoy's Admin Team</b> <br>";
         
         
         $header = "From:drimjoy@gmail.com \r\n";
         $header .= "Cc:drimjoy@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script type='text/javascript'>window.top.location='tables.php';</script>"; exit;
         }else {
            echo "Message could not be sent...";
         }





      }}
} }
                                                        
                                                        
?>