<?php 
$conn=mysqli_connect("localhost","root","","resort");

$query="SELECT * from book ORDER BY Id DESC LIMIT 1";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);

                                
                                                    
         if ($num>0) {  
         while($data=mysqli_fetch_assoc($connect)){

            $name = $data['name'];
            $email = $data['email'];
               
               
               {


                  $to = "$email";
                  $subject = "Greetings from DrimJoy's";
                  
                  $message = "<b>Dear $name,</b><br><br>"; 
                  $message .= "<b>Thank you for making a reservation in our resort!</b><br><br>";
                  $message .= "<b>We would like to inform you that your reservation has been successfully made, Please wait for the 2nd step of your booking.</b><br><br>";
                  $message .= "<b>Please let us know if there is anything we can do to make your stay more enjoyable.</b><br><br><br>";
                  $message .= "<b>DrimJoy's Admin Team</b> <br>";
                  
                  
                  $header = "From:drimjoy@gmail.com \r\n";
                  $header .= "Cc:drimjoy@gmail.com \r\n";
                  $header .= "MIME-Version: 1.0\r\n";
                  $header .= "Content-type: text/html\r\n";
                  
                  $retval = mail ($to,$subject,$message,$header);
                  
                  if( $retval == true ) {
                     echo "<script type='text/javascript'>window.top.location='thanks.html';</script>"; exit;
                  }else {
                     echo "Message could not be sent...";
                  }







         } }

      }

                                                        
                                                        
?>
      