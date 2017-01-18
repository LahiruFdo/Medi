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

    <div class="container">

        <div class="col-md-4">
            <div class="box">
            <h4>Contact List</h4>
            <div class="row">
                
            </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row" style="background-color: white;">
                <div class="col-md-4">
                    <br>
                    <img src="<?php echo base_url(); ?>/public/img/user.png" alt="" id="1" class="img-responsive" style="height:150%;">
                    <br>
                </div>           
                <div class="col-md-8">
                    <br>
                    <h4 style="color:red;">Dr. Darshana Fernando</h4>
                    <p>MBBS(Colombo), Doctor of Medicine (Kelaniya)<br>Senior Lecturer</p>
                </div>
            </div>

            <div class="row" style="background-color: white;">
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>/public/img/user.png" alt="" id="1" class="img-responsive" style="height:150%;">
                    <br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4 style="color:red;">Ms. Hansika Bogahapitiya</h4>
                    <p>Designation : Techhnical Officer Gr.II</p>
                </div>
            </div>
        </div>

    </div>

</body>