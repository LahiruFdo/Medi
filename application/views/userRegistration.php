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
                <li><a href="<?php echo base_url()."/index.php/Admin_Controller/home"; ?>"><i class="fa fa-home"></i> My Home</a></li>
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

    <div class="col-md-8">
        <div class="panel-heading">
            <h1 class="panel-title"><i class="fa fa-user"></i> User Registration</h1>
        </div>
    </div>

    <?php echo form_open('Admin_Controller/insertNewUser'); ?>
        <div class="col-md-4" style="background-color: #fff; padding-top: 10px;padding-bottom: 10px; margin-left:16px; border:1px solid #6FCEE4;">
        
            <div class="form-group">
                <div class="col-md-4"><label>User Type :</label></div>
                <div class="radio">
                    <div class="col-md-3">
                        <label><input type="radio" name="uType" value="Doctor" input required="required"> Doctor</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="uType" value="Demonstrator" input required="required"> Demonstrator</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12"><label for="name">Name :</label></div>
                <div class="col-md-6"><input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" input required="required"></div>
                <div class="col-md-6"><input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" input required="required"></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><br><label>Gender :</label></div>
                <div class="radio">
                    <div class="col-md-3"><br>
                        <label><input type="radio" name="gender" value="Male" input required="required"> Male</label>
                    </div>
                    <div class="col-md-3"><br>
                        <label><input type="radio" name="gender" value="Female" input required="required"> Female</label>
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                <div class="col-md-12"><br><label>Telephone :</label></div>
                <div class="col-md-6"><input type="text" class="form-control" id="fname" name="teleO" placeholder="Official - (+94)7________" input required="required" maxlength="14"></div>
                <div class="col-md-6"><input type="text" class="form-control" id="lname" name="teleP" placeholder="Private - (+94)7________" input required="required" maxlength="14"></div>
            </div>
            
            <div class="form-group">
                <div class="col-md-12"><br><label>Email :</label></div>
                <div class="col-md-12"><input type="text" class="form-control" id="email" name="email" placeholder="example@123.com" input required="required"></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><br><label>Professional Type :</label></div>
                <div class="col-md-12"><input type="text" class="form-control" id="pType" name="pType" placeholder="" input required="required"></div>
            </div>

            <div class="form-group">
                <div class="col-md-12"><br><label>User ID :</label></div>
                <div class="col-md-12"><input type="text" class="form-control" id="pType" name="uID" placeholder="" input required="required"></div>
            </div>

            <!-- <div class="form-group">
                <div class="col-md-4"><br><label>Profile Image :</label></div>
                <div class="col-md-8"><br><input type="file" name="fileToUpload" id="fileToUpload"><br></div>
            </div> -->
            
        </div>

         <div class="col-md-4" style="background-color: #fff; padding-top: 10px;padding-bottom: 10px; margin-left:16px; border:1px solid #6FCEE4;">

            <h5>* Only for Doctors</h5>
            <h6>----------------------------------------------------------------------------------------------------------</h6>
            <div class="form-group">
                <div class="col-md-4"><label>* Certification :</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="fname" name="cert" placeholder="certification" style="margin-top:-5px;"></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><br><label>* Specilization :</label></div>
                <div class="col-md-8"><br><input type="text" class="form-control" id="fname" name="spec" placeholder="specialization" style="margin-top:-5px;"><br></div>
            </div>
            <h6>----------------------------------------------------------------------------------------------------------<br><br></h6>
             <div class="form-group">
                <div class="col-md-5"><label>Username :</label></div>
                <div class="col-md-7"><input type="text" class="form-control" id="uname" name="uname" placeholder="username" input required="required" style="margin-top:-5px;"><br></div>
            </div>
            <div class="form-group">
                <div class="col-md-5"><label>Password :</label></div>
                <div class="col-md-7"><input type="Password" class="form-control" id="pw1" name="pw1" placeholder="password" input required="required" style="margin-top:-5px;"><br></div>
            </div>
            <div class="form-group">
                <div class="col-md-5"><label>Confirm Password :</label></div>
                <div class="col-md-7"><input type="Password" class="form-control" id="pw2" name="pw2" placeholder="confirm password" input required="required" style="margin-top:-5px;"><br><br></div>
            </div>
            <p class="text-center">
                <button class="btn btn-primary"><i class="fa fa-save"></i> Register</button><br><br><br>
            </p>
        </div>
    <?php echo form_close(); ?>

</body>
</html>