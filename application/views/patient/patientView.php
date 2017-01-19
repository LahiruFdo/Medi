<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Medi
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?php echo base_url(); ?>/public/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- theme stylesheet -->
    <link href="<?php echo base_url(); ?>/public/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?php echo base_url(); ?>/public/css/custom.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>/public/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/public/img/icon.png">

    <style>
        .nav .navbar-nav > .active{
            color: #000;
           background: #d65c14;
        }
        .in{
            border-radius: 4px;
            width: 250px;
            height: 30px;
            border: 1px solid gray;
            margin: 3px;
        }
        .but{
            background-color: gray;
            border: 1px solid black;
            border-radius: 2px;
            color: white;
            width: 120px;
            height: 40px;
            margin: 3px;
        }
        .but1{
            background-color: gray;
            border: 1px solid black;
            border-radius: 2px;
            color: white;
            width: 120px;
            height: 40px;
            margin: 3px;
            padding: 10px;
        }
    </style>

</head>

<body>

    <!-- Navigation Bar -->
    <!--<nav class="navbar navbar-default">
        <div class="col-md-1"></div>
        <div class="col-md-1">
            <div class="row flex-items-xs-middle">
                <img src="img/img2.png" alt="logo" class="img-responsive" style="margin-top: 5%;">
            </div>
        </div>
        <div class="col-md-8" style="margin-top: 1%;">
            <h4>Gastroenterology Research Laboratory</h4>
        </div>
        <div class="col-md-2">
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
            <img class="img-circle img-thumbnail img-responsive" alt="Brand" src="img/user.png" style="height:40px; width: 40px;">
            <a href="index.html" style="margin-left:5%;" style="padding-right: 0%;">Administrator Name</a> 
        </div>
    </nav>-->
    <!-- End of Navigation Bar -->  

    <div class="col-md-3">
        <div class="box">
            <div class="panel-heading">
                <h5 class="panel-title">My Menu</h5>
            </div>
            <br>
            <ul class="nav nav-pills nav-stacked">
                <li ><a href="<?php echo base_url(); ?>/index.php/demo_controller"><i class="fa fa-home"></i> My Home</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i> Clinic Roster</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>/index.php/demo_controller/registerpatient"><i class="fa fa-stethoscope"></i> Register Patient</a></li>
                <li><a href="#"><i class="fa fa-user-md"></i> Reports</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-6" align="center">
        <div class="box" style="width:900px;">

            
            <h3>Patient's Personal Details</h3>
            <table class='table table-bordered' width='90%' border=1>
            <thead>
            <tr bgcolor='#CCCCCC'> 
                <th>Patient_id</th> 
                <th>Patient Name</th>  
                <th>Gender</th> 
                <th>Date of Birth</th> 
                <th>District</th>
                <th>Guardian</th>
                <th>Diagnosis</th>
                <th>Bed ID</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>  
            </thead>
            <?php  
                foreach ($view_data as $data){  
            ?>
            <tbody>
            <tr>
                <td><?php echo $data->patient_id;?></td>  
                <td><?php echo $data->patient_name;?></td>  
                <td><?php echo $data->gender;?></td>
                <td><?php echo $data->dob;?></td> 
                <td><?php echo $data->district;?></td>
                <td><?php echo $data->guardian;?></td>
                <td><?php echo $data->diagnosis;?></td>
                <td><?php echo $data->bed_id;?></td>
                <td><a href="<?php echo site_url("demo_controller/editpatient/{$data->patient_id}"); ?>">Edit</a></td>
                <td><a href="<?php echo site_url("demo_controller/deletepatient/{$data->patient_id}"); ?>">Delete</a></td>
            </tr> 
            </tbody> 
            <?php 
                }  
            ?>  
                
            </table> 

            




        </div>
    </div>


</body>
</html>