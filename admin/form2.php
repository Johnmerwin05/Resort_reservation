


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        font-size: 110%;
    }

    .logo1 {
        margin-top: 5%;
        margin-left: 26%;
    }

    .logo_content {
        margin-top: -13%;
    }

    td {
        padding-left: 10px;
    }


</style>
<body>


    
    <table border="1" cellspacing="0" cellpadding="0" width="898" align="center">
        <tbody>
            <tr>
                <td width="698" colspan="20" valign="top">
                    <table cellpadding="0" cellspacing="0" align="left">
                    </table>
                    <p class="logo1">
                        <img
                            width="105"
                            height="105"
                            src="../assets/img/logo2.jpg"
                        />
                    </p>
                    <div class="logo_content">
                    <p align="center">
                        Republic of the Philippines
                    </p>
                    <p align="center">
                        Province of Isabela
                    </p>
                    <p align="center">
                        Municipality of Aurora
                    </p>
                    </div>
                    <p align="center">
                        <strong> </strong>
                    </p>
                    <p align="center" style="font-size: 120%; margin-top: 5%;">
                        <strong>ISKOLAR NG BAYANG AURORA (IBA)</strong>
                    </p>
                    <p align="center" style="font-size: 100%;">
                        <strong> APPLICATION FORM</strong>
                        <a name="_Hlk117081232"></a>
                        <strong></strong>
                    </p>
                    <p style="font-size: 80%; margin-top: 5%; margin-left: 5%;">
                            Instructions: Fill in all the required information. DO
                            NOT leave an item blank. If them is not applicable,
                            indicate “NA”
                    </p>


                </td>
            </tr>
            

            <?php 
                                $conn=mysqli_connect("localhost","root","","scholar_registration"); //database connection  
                                //hostname, username, password, database name  

                                $Id = $_GET['Id'];
                                if ($conn) {

                                    //echo "Connection successfully";  
                                }else{  
                                    echo "Error";  
                                }  
                                $query="SELECT * from archive WHERE Id = '$Id'";  
                                $connect=mysqli_query($conn,$query);  
                                $num=mysqli_num_rows($connect);
                                
                                                    
                                                    
                                                if ($num>0) {  
                                                    while($data=mysqli_fetch_assoc($connect)){
                                                        
                                                        
                                                        ?>
                                          
                                                                                     
            <tr style="background-color: #747474;">
            <td height = "30"><b style="margin: 0px 10px 0px 10px;">I. PERSONAL INFORMATION </td>
            </tr>

            <tr >
            <td height = "30"><b style="margin: 0px 147px 0px 10px;">LAST NAME:</b><?= $data['lastname'];?> </td>
            </tr>

            <tr >
            <td height = "30"><b style="margin: 0px 145px 0px 10px;">FIRST NAME:</b><?= $data['firstname'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 125px 0px 10px;">MIDDLE NAME:</b><?= $data['middlename'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 185px 0px 10px;">SUFFIX:</b><?= $data['suffix'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 150px 0px 10px;">BIRTH DATE:</b><?= $data['birthday'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 144px 0px 10px;">BIRTH PLACE:</b><?= $data['placebirth'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 145px 0px 10px;">CIVIL STATUS:</b><?= $data['civil'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 190px 0px 10px;">EMAIL:</b><?= $data['email'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 115px 0px 10px;">PHONE NUMBER:</b><?= $data['phone'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">GENDER:</b><?= $data['gender'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 210px 0px 10px;">AGE:</b><?= $data['age'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 184px 0px 10px;">COURSE:</b><?= $data['course'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 158px 0px 10px;">YEAR LEVEL:</b><?= $data['yearlvl'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 141px 0px 10px;">SCHOOL YEAR:</b><?= $data['schoolyear'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 65px 0px 10px;">STATUS OF APPLICATION:</b><?= $data['status_app'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 160px 0px 10px;">BARANGAY:</b><?= $data['brgy'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 140px 0px 10px;">MUNICIPALITY:</b><?= $data['city'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 177px 0px 10px;">PROVICE:</b><?= $data['provice'];?> </td>
            </tr>

            <tr style="background-color: #747474;">
            <td height = "30"><b style="margin: 0px 170px 0px 10px;">II. FAMILY BACKGROUND </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 125px 0px 10px;">FATHER'S NAME:</b><?= $data['lastfather'];?> , <?= $data['firstfather'];?> <?= $data['middlefather'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">INCOME:</b><?= $data['fincome'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 147px 0px 10px;">OCCUPATION:</b><?= $data['foc'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 115px 0px 10px;">MOTHER'S NAME:</b><?= $data['lastm'];?> , <?= $data['firstm'];?> <?= $data['middlem'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">INCOME:</b><?= $data['mincome'];?> </td>
            </tr>
            <tr >
            <td height = "30" ><b style="margin: 0px 147px 0px 10px;">OCCUPATION:</b><?= $data['moc'];?> </td>
            </tr>

            <tr style="background-color: #747474;">
            <td height = "30"><b style="margin: 0px 170px 0px 10px;">III. EDUCATIONAL BACKGROUND </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 150px 0px 10px;">ELEMENTARY:</b><?= $data['Elem'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">HONOR's:</b><?= $data['honor1'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 115px 0px 10px;">YEAR GRADUATED:</b><?= $data['graduated1'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 190px 0px 10px;">JUNIOR:</b><?= $data['junior'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">HONOR's:</b><?= $data['honor2'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 115px 0px 10px;">YEAR GRADUATED:</b><?= $data['graduated2'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 190px 0px 10px;">SENIOR:</b><?= $data['senior'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">HONOR's:</b><?= $data['honor3'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 115px 0px 10px;">YEAR GRADUATED:</b><?= $data['graduated3'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">COLLEGE:</b><?= $data['college'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 180px 0px 10px;">HONOR's:</b><?= $data['honor4'];?> </td>
            </tr>

            <tr >
            <td height = "30" ><b style="margin: 0px 115px 0px 10px;">YEAR GRADUATED:</b><?= $data['graduated4'];?> </td>
            </tr>



        






            <?php
                                                    }}
            ?>
            
</body>
</html>