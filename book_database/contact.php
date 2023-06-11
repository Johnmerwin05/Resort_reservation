<?php

   $dbhost='localhost';
   $dbname='resort';
   $dbusername='root';
   $dbpass='';
   
       $mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);    
   
       if(isset($_POST['submit']))
       {
           $name = $_POST["name"];
           $email = $_POST["email"];
           $message = $_POST["message"];
           
   
           if($mysqli)
           {

            $result = mysqli_query($mysqli,"INSERT into contact (name, email, message) values ('$name','$email','$message')");  
            echo '<script type="text/javascript">'  ."alert('Message sent')" .'</script>'; 
            echo "<script type='text/javascript'>window.top.location='../contact.php';</script>";           

           }else{
               echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
           }

        }
           
         
        


?>