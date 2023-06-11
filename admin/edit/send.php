<?php 

$conn=mysqli_connect("localhost","root","","resort");



$query="SELECT * from announcement ORDER BY Id DESC LIMIT 1"; 
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);
                                
                                                    
if ($num>0) {  
while($data=mysqli_fetch_assoc($connect)){

    $subject = $data['subject'];
    $announce = $data['announce'];
    
    
    $sql = "SELECT email FROM usertable";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){
        
        $gg =  $row["email"];
    
         
         
         $to = "$gg";
         $subject = "$subject";
         
         $message = "<b>$announce</b><br><br>"; 
         $message .= "<b>DrimJoy's Admin Team</b> <br>";
         
         $header = "From:drimjoy@gmail.com \r\n";
         $header .= "Cc:drimjoy@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script>window.location.href='../announce.php?=1';</script>";
         }else {
            echo "Message could not be sent...";
         }
     }







} }}
                                                        
                                                        
?>