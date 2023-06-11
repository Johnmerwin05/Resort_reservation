<?php

error_reporting(0);
ini_set('display_errors', 0);

$dbhost='localhost';
$dbname='resort';
$dbusername='root';
$dbpass='';

    $mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
    

    if(isset($_POST['pay']))
    {
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $reference = $_POST['reference'];
        $mod = $_POST['mod'];

        
        


        $result = mysqli_query($mysqli,"INSERT into payment (name, Mpayment, amount, reference) VALUES ('$name','$mod', '$amount', '$reference')");
        

        if($result)
        {
            
            echo "<script>window.location.href='../payment.php';</script>";

        }
        else{
            echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
        }

    }


?>