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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/custom.css">

    <script src="<?php echo base_url(); ?>/public/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/public/img/icon.png">

    <style>
        .btn-user{
            background-color: #50C0A8;
            width : 100%;
            font-size: 0.8em;
        }

        .table a{
            color: #555555;
        }
    </style>

</head>

<body>
    <div class="col-md-3">
        <div class="box" style="background-color: #555555; color:white; font-size: 1.1em;">
            <div class="panel-heading">
                <h5 class="panel-title">My Menu</h5>
            </div>
            <br>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="<?php echo base_url()."/index.php/Admin_Controller/home"; ?>"><i class="fa fa-home"></i> My Home</a></li>
                <li><a href="<?php echo base_url()."/index.php/Admin_Controller/calendar"; ?>"><i class="fa fa-calendar"></i> Calendar</a></li><br>
                <li class="active"><a href="<?php echo base_url()."/index.php/Admin_Controller/userInfo"; ?>"><i class="fa fa-user"></i> User Info</a></li>
                <li><a href="#"><i class="fa fa-user-md"></i> Patients' Records</a></li>
                <li><a href="#"><i class="fa fa-book"></i> Doctors' Roster</a></li>
                <li><a href="#"><i class="fa fa-tasks"></i> Workers Allocation</a></li>
                <li><a href="#"><i class="fa fa-edit"></i> Questionnaire Templates</a></li><br>
                <li><a href="#"><i class="fa fa-bell"></i> Notifications</a></li>
                <li><a href="#"><i class="fa fa-desktop"></i> News Room</a></li><br>
            </ul>
        </div>
    </div>

    <div class="col-md-8" style="background-color: #fff; padding-bottom: 2%;">
        <h3><i class="fa fa-user fa-lg"></i> Users</h3>
        <div class="col-md-6">
            <div class="col-md-4">
                <div class="col-md-12"></div>
                <div class="col-md-12"></div>
                <div class="col-md-12"></div>
                <div class="col-md-12"></div>
                <div class="col-md-12"></div>
                <div class="col-md-12"></div>
                <div class="col-md-12"></div>
                <div class="col-md-12"></div>
                <h4 class="panel-title">Select Users</h4>
            </div>
            <div class="col-md-4">
                <button id="doc" class="btn btn-user btn-lg" onclick="viewDoctors()">Doctors</button>
            </div>
            <div class="col-md-4">
                <button id="dem" class="btn btn-user btn-lg" onclick="viewDemos()">Demonstrators</button>
            </div>
        </div> 
    </div>


    <div id="doctor" style="display: none;">
    <div class="col-md-8">
        <br>
        <div class="box">
            <div class="panel-heading">
                <h4 class="panel-title">Doctors</h4>
            </div>
            <table class="table table-bordered table-inverse" style="background-color: #A2B9B4;">
                <tr><th> UserID </th><th> Name </th><th> Title </th><th> Specialization </th><th> UserName </th><th></th><th></th></tr>

                <?php foreach($doctors as $person):?>
                        <tr><td><?php echo $person->staff_id;?></td><td><?php echo "Dr. "?><?php echo $person->firstName." ";?><?php echo $person->lastName." ";?></td><td><?php echo $person->professionalTitle;?></td><td><?php echo $person->specialization;?></td><td><?php echo $person->user_name;?></td><td><center><button type="button" class="btn btn-success btn-xs">Update</button></center></td><td><center><button type="button" class="btn btn-warning btn-xs">Delete</button></center></td></tr>
                <?php endforeach;?>    
            </table>
        </div>
    </div>
    </div>

    <div id="demo" style="display: none;">
    <div class="col-md-8">
        <br>
        <div class="box">
            <div class="panel-heading">
                <h4 class="panel-title">Demonstrators</h4>
            </div>
            <table class="table table-bordered table-inverse" style="background-color: #A2B9B4;">
                <tr><th> UserID </th><th> Name </th><th> Title </th><th> UserName </th><th></th><th></th></tr>
                
                <?php foreach($demonstrators as $person):?>
                        <tr><td><?php echo $person->staff_id;?></td><td><?php echo $person->firstName." ";?><?php echo $person->lastName." ";?></td><td><?php echo $person->professionalTitle;?></td><td><?php echo $person->user_name;?></td><td><center><button type="button" class="btn btn-success btn-xs">Update</button></center></td><td><center><button type="button" class="btn btn-warning btn-xs">Delete</button></center></td></tr>
                <?php endforeach;?>    
            </table>
        </div>
    </div>
    </div>

    <!--script to load user details-->
    <script type="text/javascript">

        function viewDoctors(){

            var doctor = document.getElementById("doctor");
            var demo = document.getElementById("demo");
            demo.style.display = 'none';
            doctor.style.display = 'block';
        }

        function viewDemos(){

            var doctor = document.getElementById("doctor");
            var demo = document.getElementById("demo");
            doctor.style.display = 'none';
            demo.style.display = 'block';
        }
        
        
    </script>
    <!--end of script-->

</body>
</html>