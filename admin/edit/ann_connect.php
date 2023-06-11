             <?php

                error_reporting(0);
                ini_set('display_errors', 0);
                
                $dbhost='localhost';
                $dbname='resort';
                $dbusername='root';
                $dbpass='';
                
                    $mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
                    
                
                    if(isset($_POST['announce']))
                    {
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $subject = $_POST['subject'];
                        $announce1 = $_POST['announce1'];

                        
                        
                
                
                        $result = mysqli_query($mysqli,"INSERT into announcement (name, subject, announce) VALUES ('$name', '$subject', '$announce1')");
                        
                
                        if($result)
                        {
                            
                            echo "<script>window.location.href='send.php?id= $id';</script>";

                        }
                        else{
                            echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
                        }
                
                    }


?>