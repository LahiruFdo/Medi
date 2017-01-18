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
    <link href="<?php echo base_url(); ?>/public/css/calendar.css" rel="stylesheet">
    <!-- your stylesheet with modifications -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/custom.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="<?php echo base_url(); ?>/public/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/public/img/icon.png">

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
                <li class="active"><a href="<?php echo base_url()."/index.php/Admin_Controller/calendar"; ?>"><i class="fa fa-calendar"></i> Calendar</a></li><br>
                <li><a href="<?php echo base_url()."/index.php/Admin_Controller/userInfo"; ?>"><i class="fa fa-user"></i> User Info</a></li>
                <li><a href="#"><i class="fa fa-user-md"></i> Patients' Records</a></li>
                <li><a href="#"><i class="fa fa-book"></i> Doctors' Roster</a></li>
                <li><a href="#"><i class="fa fa-tasks"></i> Workers Allocation</a></li>
                <li><a href="#"><i class="fa fa-edit"></i> Questionnaire Templates</a></li><br>
                <li><a href="#"><i class="fa fa-bell"></i> Notifications</a></li>
                <li><a href="#"><i class="fa fa-desktop"></i> News Room</a></li><br>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box">
            <?php
                echo $calendar;
            ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box">
            <br>
            <h3 style="background-color: yellow; padding: 5%;"><center>Add Event</center></h3><br>
            <?php echo form_open('Admin_Controller/addEvent'); ?>
                <div class="form-group">
                    <label>Title</label>
                   <input type="text" class="form-control" id="titlee" name="title" placeholder="enter the title"/><br>
                    <label>Add Description</label>
                    <textarea class="form-control" name="notice" row="10" style="resize:none; height:2" placeholder="Type Here"></textarea><br>
                    <label>Date</label>
                    <input type="date" class="form-control" id="endDate" name="endDate" placeholder="enter the end date"/>
                </div>
                <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Add</button><br><br><br>
                </p>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>