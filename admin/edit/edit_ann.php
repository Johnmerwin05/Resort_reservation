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
                    <h5 class="modal-title" id="exampleModalLabel" > Edit Applicant Information </h5>
                </div>

                <form action="ann_connect.php" method="POST">

                    <div class="modal-body">
                        

                        <div class="form-group">
                            <label> Subject </label>
                            <input type="text" name="subject"  class="form-control" >
                        </div>
                        
                        <div class="form-group">
                            <label> Name of announcer </label>
                            <input type="text" name="name"  class="form-control" >
                        </div>

                        <div class="form-group1">
                            <label> Announcement </label>
                            <textarea type="text" name="announce1"  class="form-control" rows="10" cols="50"></textarea>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <a href="../announce.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" name="announce" class="btn btn-primary">Send</button>
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