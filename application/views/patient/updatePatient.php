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
                <img src="<?php //echo base_url(); ?>/public/img/img2.png" alt="logo" class="img-responsive" style="margin-top: 5%;">
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
            <img class="img-circle img-thumbnail img-responsive" alt="Brand" src="<?php //echo base_url(); ?>/public/img/user.png" style="height:40px; width: 40px;">
            <a href="index.html" style="margin-left:5%;" style="padding-right: 0%;">Demonstrator</a> 
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
                <li><a href="<?php echo base_url(); ?>/index.php/demo_controller"><i class="fa fa-home"></i> My Home</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i> Clinic Roster</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>/index.php/demo_controller/registerpatient"><i class="fa fa-stethoscope"></i> Register Patient</a></li>
                <li><a href="#"><i class="fa fa-user-md"></i> Reports</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-6" align="center">
        <div class="box">

            <?php  
                foreach ($edit_data as $data){  
            ?>
            
                    <form method="post" action="<?php echo site_url('demo_controller/updatepatient/'.$data->patient_id.''); ?>">
                            
                            <table>
                                    <h3>Patient's Personal Details</h3>
                                        
                                            
                                            <tr>
                                                <td>Name:</td>
                                                <td><input type="text" name="patient_name" value="<?php echo $data->patient_name;?>" required class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td> 
                                                <td><input type="radio" name="gender" <?php if($data->gender == 'Female' ) { echo 'checked'; } ?> value="Female">Female
                                                    <input type="radio" name="gender" <?php if($data->gender == 'Male' ) { echo 'checked'; } ?> value="Male">Male
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td><input type="text" name="address" value="<?php echo $data->address; ?>" required class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Telephone No:</td>
                                                <td><input type="text" name="telephone_no" maxlength="10" value="<?php echo $data->telephone_no; ?>" class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile No:</td>
                                                <td><input type="text" name="mobile_no" maxlength="10" value="<?php echo $data->mobile_no; ?>" class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth:</td>
                                                <td><input type="date" name="dob" value="<?php echo $data->dob; ?>" required class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>District:</td>
                                                <td><input type="text" name="district" value="<?php echo $data->district; ?>" required class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>No of Siblings:</td>
                                                <td><input type="text" name="siblings" value="<?php echo $data->siblings; ?>"  class="in"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Father's Occupation:</td>
                                                <td><input type="text" name="f_occupation" value="<?php echo $data->father; ?>"  class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Mother's Occupation:</td>
                                                <td><input type="text" name="m_occupation" value="<?php echo $data->mother; ?>"  class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Monthly Income:</td>
                                                <td><input type="text" name="income" value="<?php echo $data->income; ?>" class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Name of the Guardian:</td>
                                                <td><input type="text" name="guardian" value="<?php echo $data->guardian; ?>" required class="in"></td>
                                            </tr>
                                            <tr>
                                                <td>Current Diagnosis:</td>
                                                <td><input type="text" name="diagnosis" value="<?php echo $data->diagnosis; ?>" required class="in"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Bed Id:</td>
                                                <td><input type="text" name="bed_id" value="<?php echo $data->bed_id; ?>" required class="in"></td>
                                            </tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr>
                                                <td colspan="2" align="right"><input type="submit" class="but" value="Update" name="update"></td>
                                            </tr>
                            </table>
        
                    </form>

            <?php
                 }
            ?>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box">
            <div class="panel-heading">
                <h5 class="panel-title">News Feed</h5>
            </div>
            <div class="nav nav-pills nav-stacked">
                <p>This is the news feed </p>
                <p>This is the news feed </p>
                <p>This is the news feed </p>
                <p>This is the news feed </p>
            </div>
        </div>
    </div>

</body>
</html>