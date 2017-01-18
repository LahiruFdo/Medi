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
        .table a{
            color: #555555;
        }
        .left{
            width: 10%;
            margin-bottom: 20px;
            float: right;
            font-size: 1.1em;
        }
        .right{
            width: 90%;
            margin-bottom: 20px;
            float: left;
            font-size: 1.1em;
        }
        .btn-circle {
            width: 49px;
            height: 49px;
            text-align: center;
            padding: 5px 0;
            font-size: 20px;
            line-height: 2.00;
            border-radius: 30px;
        }
        .btn-circle-lg {
          width: 79px;
          height: 79px;
          text-align: center;
          padding: 13px 0;
          font-size: 30px;
          line-height: 2.00;
          border-radius: 70px;
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
                <li class="active"><a href="<?php echo base_url()."/index.php/Admin_Controller/home"; ?>"><i class="fa fa-home"></i> My Home</a></li>
                <li><a href="<?php echo base_url()."/index.php/Admin_Controller/calendar"; ?>"><i class="fa fa-calendar"></i> Calendar</a></li><br>
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


    <div class="col-md-2">
        <a href="#1" data-toggle="modal" data-target="#notice-modal">
            <div class="box" style="background: #6FCEE4; color:#fff; font-size: 1.2em;">
                <center><i class="fa fa-bell fa-2x"></i></center>
                <center>Add Notifications</center>
            </div>
        </a>
    </div>

    <div class="modal fade" id="notice-modal" tabindex="-1" role="dialog" aria-labelledby="Login">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="Login">New Notification</h4></center>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Admin_Controller/addNotice'); ?>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" id="titlee" name="title" placeholder="enter the title"/><br>
                            <label>Add your notification</label>
                            <textarea class="form-control" name="notice" row="10" style="resize:none; height:2" placeholder="Type Here"></textarea><br>
                            <label>End Date</label>
                            <input type="date" class="form-control" id="endDate" name="endDate" placeholder="enter the end date"/>
                        </div>
                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Add</button>
                        </p>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <a href="<?php echo base_url()."/index.php/Admin_Controller/userRegistration"; ?>">
            <div class="box" style="background: #6FCEE4; color:#fff; font-size: 1.2em;">
                <center><i class="fa fa-user fa-2x"></i></center>
                <center>Add New User</center>
            </div>
        </a>
    </div>

    <div class="col-md-2">
        <a href="#3" data-toggle="modal" data-target="#event-modal">
            <div class="box" style="background: #6FCEE4; color:#fff; font-size: 1.2em;">
                <center><i class="fa fa-calendar fa-2x"></i></center>
                <center>Add Events</center>
            </div>
        </a>
    </div>

    <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="Login">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="Login">Add Event</h4></center>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Admin_Controller/addEvent'); ?>
                        <div class="form-group">
                            <label>Event Title</label>
                            <input type="text" class="form-control" id="titlee" name="title" placeholder="enter the title"/><br>
                            <label>Add Description</label>
                            <textarea class="form-control" name="notice" row="10" style="resize:none; height:2" placeholder="Type Here"></textarea><br>
                            <label>Date</label>
                            <input type="date" class="form-control" id="endDate" name="endDate" placeholder="enter the end date"/>
                        </div>
                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Add</button>
                        </p>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <a href="<?php echo base_url()."/index.php/Admin_Controller/loadContacts"; ?>">
            <div class="box" style="background: #6FCEE4; color:#fff; font-size: 1.2em;">
                <center><i class="fa fa-users fa-2x"></i></center>
                <center>Contacts</center>
            </div>
        </a>
    </div>

    <div class="col-md-6">
        <div class="box">
            <div class="panel-heading">
                <h4 class="panel-title">Users</h4>
            </div>
            <table class="table table-bordered table-inverse" style="background-color: #A2B9B4;">
                <tr><th> UserID </th><th> Name </th><th> User Roll </th><th> UserName </th></tr>

                <?php foreach($this->session->userdata('doctors') as $person):?>
                        <tr><td><a href="#"><?php echo $person->staff_id;?></a></td><td><a href="#"><?php echo "Dr. "?><?php echo $person->firstName." ";?><?php echo $person->lastName." ";?></a></td><td>Doctor</td><td><?php echo $person->user_name;?></td></tr>
                <?php endforeach;?>

                <?php foreach($this->session->userdata('demos') as $person):?>
                        <tr><td><a href="#"><?php echo $person->staff_id;?></a></td><td><a href="#"><?php echo $person->firstName." ";?><?php echo $person->lastName." ";?></a></td><td>Technical Officer</td><td><?php echo $person->user_name;?></td></tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>

    <div class="col-md-2">
        <div class="box" style="margin-bottom: 0%;">
            <center><strong>Registered Patients</strong></center>
            <center><div class="btn btn-circle btn-info" style="cursor: auto;">15</div></center>
        </div>
        <div class="box" style="margin-bottom: 0%;">
            <center><strong>Today Visits</strong></center>
            <center><div class="btn btn-circle btn-info" style="cursor: auto;">05</div></center>
        </div>
        <div class="box" style="margin-bottom: 0%;">
            <center><strong>Events for Today</strong></center>
            <center><div class="btn btn-circle btn-info" style="cursor: auto;">00</div></center>
        </div>
        <div class="box" style="margin-bottom: 0%;">
            <center><strong>Researches</strong></center>
            <center><div class="btn btn-circle btn-info" style="cursor: auto;">02</div></center>
        </div>
    </div>

</body>
</html>