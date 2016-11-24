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
    </style>

</head>

<body>

    <div class="navbar" style="background-color: #555555; color:white;">
        <div class="col-md-1"></div>
        <div class="col-md-1">
            <img src="<?php echo base_url(); ?>/public/img/img1.png" alt="logo" class="img-responsive" style=" margin-top:10%;">
        </div>
        <div class="col-md-10">
            <h2>Gastroenterology Research Laboratory</h2>
            <h4>Faculty of Medicine, University of Kelaniya <span class="h5">( -  Colombo North Teaching Hospital, Ragama - )</span></h4>
        </div>
    </div>

    <nav class="navbar navbar-default" style=" margin-top:-2%;" >
        <div class="container">
            <ul class="nav navbar-nav" style="padding-left:1%;">
                <li class="active"><a href="<?php echo base_url(); ?>//publicindex.php/Login_Controller">Home</a></li>
                <li><a href="<?php echo base_url(); ?>/index.php/Login_Controller/loadWhyUs">Why Us</a></li>
                <li><a href="<?php echo base_url(); ?>/index.php/Login_Controller/loadAboutUs">About Us</a></li>
                <li><a href="<?php echo base_url(); ?>/index.php/Login_Controller/loadContact">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="float: right; margin-right: 5%;">
                <a href="#" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#login-modal">Login</a>
            </ul>

            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="Login">Login</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open('User_Controller/userLogin'); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                </div>

                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </p>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="col-md-9">
            <img src="<?php echo base_url(); ?>/public/img/11.jpg" alt="" id="1" class="img-responsive">
        </div>
        <div class="col-md-3" style="text-align: justify;">
            <div class="box">
                <br>
                <p style="font-size: 1.2em">The Gastroenterology Reasearch Laboratory of the Department of Physiology is a modern and well-equipped laboratory, located at the Faculty of Medicine, University of Kelaniya. This laboratory offers gastric function assessment for both adults and children for diagnosis and follow ups. The tests are performed and results are interpreted by a specialist physiologist.</p> 

                <!-- <p>Gastric function tests, though important in the diagnosis, management and follow-up of patients with gastro intestinal diseases and patients at risk for the development of gastro intestinal impairment is not routinely used due to lack of availability, expertise and cost</p> -->
            </div>
        </div>
    </div> 

    
</body>

</html>