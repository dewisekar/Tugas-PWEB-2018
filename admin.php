<?php
	include 'dbconnect.php';
	include 'action_login.php';
	
	session_start();
	if (!isset($_SESSION['username'])) {
	?>
	 <script type="text/javascript">
		alert("Login First!");
		window.location.href="login.php";
	 </script>
	<?php
	}
?>

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Admin Dashboard</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/modal.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    </head>
    <body>
        
        <!-- Header -->
        <div id="header" style="background-position: 50% 0%; <br />
<b>Notice</b>:  Undefined variable: full_page in <b>C:\xampp\htdocs\bootstrap\html\php\header.php</b> on line <b>46</b><br />
" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html" title="">
                            <img src="assets/img/logo.png" alt="Logo" style="width: 20%; transform: translateY(75%); margin-bottom: 8%;"  />
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <!-- Top Menu -->
                <div id="hornav" class="row text-light">
                    <div class="col-md-12">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.php" class="fa-home ">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Top Menu -->
            </div>
        </div>        
         <!-- Begin Sidebar Menu -->
    	<div id="content">
            <div class="container background-white">
                <div class="row margin-vert-30">
                    <div class="col-md-12">
                    	<div class="col-md-3">
        				    <ul class="list-group sidebar-nav" id="sidebar-nav">
        				        <!-- Typography -->
        				        <li class="list-group-item">
        				            <a href="admin.php">
        				            	<i class="fa fa-dashboard"></i>Admin Dashboard</a>
        				        </li>
        				        <!-- 
        				        <!-- End Typography -->
        				        <!-- Components -->
        				        <li class="list-group-item list-toggle">
        				            <a class="accordion-toggle" href="#collapse-components" data-toggle="collapse">
        				            	<i class ="fa-pencil-square-o"></i> Quiz</a>
        				            <ul id="collapse-components" class="collapse">
        				                <li>
        				                    <a href="managequiz.php">
        				                        <i class="fa fa-question"></i>Edit Questions</a>
        				                </li>
        				            </ul>
        				        </li>
        				        <li class="list-group-item">
        				            <a href="action_logout.php">
        				            	<i class="fa fa-power-off"></i>Log Out</a>
        				        </li>
        				        <!-- End Grid System -->
        				    </ul>
        				</div>
                        <!-- Intro / Why Us? -->
                        <div class="row">
							<div class="col-md-8 animate fadeInLeft">
                                <h2 class="margin-bottom-20">Welcome <?php echo $_SESSION['name'] ?> to your Dashboard!</h2>
                        	</div>
                            <div class="col-md-8 animate fadeInLeft">
                                <p style="text-align: justify;">Welcome to Administrator Page. In this page, you can do somethings such as managing your quiz question and etc. Further development will be coming soon!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
   
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Stellar Parallax -->
            <script type="text/javascript" src="assets/js/jquery.stellar.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>

            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->