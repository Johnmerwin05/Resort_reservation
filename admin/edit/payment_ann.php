<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Information </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>

    <style>
        .modal-dialog {
            display: flex;
            justify-content: center;
        }

        .form-group {
            display: inline-block; width:49%;
        }
        
        .form-group .cf-medium {
            width:130%;
        }

        .form_group label {
            display: block !important; 
            width: 150% !important;
        }
        
        .form-group1 {
            display: inline-block; width:100%;
            height: 50px;
        }
        
        .form-group1 .cf-medium {
            width:130%;
        }

        .form_group1 label {
            display: block !important; 
            width: 150% !important;
        }


    </style>

<body>
        <div class="modal-dialog" role="document">
        <center>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" > Payment information </h5>
                </div>

                <form action="payment_conn.php" method="POST">

                    <div class="modal-body">

                        <div class="form-group">
                        <label for="guests">Name</label>
                            <select name="name" id="guests" class="form-control">
                            <option value="" disabled selected>Select Name</option>

                            <?php

                                        $conn=mysqli_connect("localhost","root","","resort"); 
                                        if ($conn) {

                                            //echo "Connection successfully";  
                                        }else{  
                                            echo "Error";  
                                        }  
                                        $sql = "SELECT * FROM confirm_book";
                                        $result = $conn->query($sql);
                                        $options =array();
                                        while($row=mysqli_fetch_array($result))
                                        {    
                                            $options[] =$row;    
                                        }
                                                                                
                                        ?>
                                    <?php
                                    foreach($options as $option):
                                        echo '<option value ="'.$option['name'].' '.$option['Amount'].' ">'.           
                                                $option['name'].'  '.$option['Amount'].'</option>';
                                    endforeach;
                                    ?> 
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="guests">Mode of Payment</label>
                            <select name="mod" id="guests" class="form-control">
                            <option value="" disabled selected>Select Name</option>
                            <option value="Cash" >Cash</option>
                            <option value="Gcash" >Gcash</option>
                            <option value="Back Transfer" >Back Transfer</option>
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label> Amount to pay</label>
                            <input type="text" name="amount"  class="form-control" >
                        </div>

                        <div class="form-group">
                            <label> Reference number</label>
                            <input type="text" name="reference"  class="form-control" >
                        </div>



                    </div>
                    <div class="modal-footer">
                        <a href="../payment.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" name="pay" class="btn btn-primary">Submit</button>
                    </div>

                    </center>
                </form>

            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


</body>
</html>