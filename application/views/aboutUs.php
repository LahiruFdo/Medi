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
        About Us
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?php echo base_url(); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- theme stylesheet -->
    <link href="<?php echo base_url(); ?>/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?php echo base_url(); ?>/css/custom.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/img/icon.png">
</head>

<body>
    
    <div class="navbar" style="background-color: #555555; color:white;">
        <div class="col-md-1"></div>
        <div class="col-md-1">
            <img src="<?php echo base_url(); ?>/img/img1.png" alt="logo" style=" margin-top:10%;">
        </div>
        <div class="col-md-10">
            <h2>Gastroenterology Research Laboratory</h2>
            <h4>Faculty of Medicine, University of Kelaniya <span class="h5">( -  Colombo North Teaching Hospital, Ragama - )</span></h4>
        </div>
    </div>

    <nav class="navbar navbar-default" style=" margin-top:-2%;" >
        <div class="container">
            <ul class="nav navbar-nav" style="padding-left:1%;">
                <li><a href="<?php echo base_url(); ?>/index.php/Login_Controller">Home</a></li>
                <li><a href="<?php echo base_url(); ?>/index.php/Login_Controller/loadWhyUs">Why Us</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>/index.php/Login_Controller/loadAboutUs">About Us</a></li>
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
                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password-modal" placeholder="password">
                                </div>

                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        
        <div class="col-md-8" style="text-align: justify; font-size: 1em;">
            <div class="box">
            <br>
            <p >The Gastroenterology Reasearch Laboratory of the Department of Physiology is a modern and well-equipped laboratory, located at the Faculty of Medicine, University of Kelaniya. This laboratory offers gastric function assessment for both adults and children for diagnosis and follow ups. The tests are performed and results are interpreted by a specialist physiologist.</p> 
            <p>Gastric function tests, though important in the diagnosis, management, and follow-up of patients with gastro intestinal diseases and patients at risk for the development of gastro intestinal impairment is not routinely used due to lack of availability, expertise and cost.</p>
            <!-- <p>This laboratory was established with the aim of fulfilling three main tasks</p>
            <ul>
                <li>Providing quality diagnostic services</li>
                <li>Improving teaching</li>
                <li>Enhancing research in the field of gastro intestinal physiology</li>
            </ul> -->
            <!-- <p>The laboratory envisions</p>
            <ul>
                <li>Improving teaching related to gastro intestinal physiology</li>
                <li>Working towards increasing research output of the faculty related to gastro intestinal physiology</li>
                <li>Enhancing research opportunities and quality of research related to gastro intestinal physiology</li>
                <li>Establishing collaborations with other faculties and institutions with similar interests</li>
            </ul> -->
            </div>
        </div>
        <div class="col-md-4">
            <img src="<?php echo base_url(); ?>/img/fac.jpg" alt="" id="1" class="img-responsive" style="height:150%;">
        </div>
        <div class="col-md-12" style="text-align: justify; font-size: 1em;">
            <div class="box">
            <p>The laboratory is currently involed in:</p>
            <ul>
                <li style="color: red"><b>Service Function</b></li>
                <p>This is the only laboratory in the country with facilities to investigate gastric motility and intestinal transit using non invaasive techniques. This laboratory provides to patients reffered from government and private medical institutions.</p>
                <li style="color: red"><b>Research</b></li>
                <p>Research carried out in this laboratory is mainly translational and focuses on improving the quality of life of patients with gastrointestinal disorders. Current resarch activities of the laboratory are mainly related to gastrointestinal motor functions in health and disease, gastro-paresis and functional gastrointestinal disorders.</p>
                <li style="color: red"><b>Postgraduate Training</b></li>
                <p>One of the objectivess of the laboratory is to provide facilities for postgraduate students reading for MPils, MDs and PhDs in gastrointestinal physiology.</p>
            </ul>
            <br>
            <p>The laboratory charges a fee for the investigations provided. The maintenance and expansion of the laboratory is carried out with funds generated by the laboratory, research grants and donations.</p>
            </div>
        </div>
        
    </div>

</body>

</html>