<?php
    include 'dbconnect.php';
    include 'action_login.php';
    
    session_start();
    if (isset($_SESSION['username'])) {
   ?>
     <script type="text/javascript">
        window.location.href="admin.php";
     </script>
    <?php
    }   
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Quiz</title>
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
        <link rel="stylesheet" href="assets/css/login_modal.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/modal.css" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/quiz.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="assets/css/quiz.css" rel="stylesheet">
      
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    </head>
    <body style="background-color: #451733">        
        <div id="id01" class="logbox">
         
         <form class="modal-content animate" method="POST" action="action_login.php">
           <div class="imgcontainer">
             <h2 style="text-align: center;"> Log In Here </h2>
           </div>
       
           <div class="container">
             <label for="uname"><b>Username</b></label>
             <input type="text" placeholder="Enter Username" name="username" required>
       
             <label for="psw"><b>Password</b></label>
             <input type="password" placeholder="Enter Password" name="password" required>
             <a>
	         	<input type="submit" value="Sign in" name="submit" >
	         </a>
           </div>        
           <div class="container" style="background-color:#fde7cf; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
             <a type="button" href="index.php" class="cancelbtn">Cancel</a>
           </div>
         </form>
        </div> 
            
            
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
        <!--<script type="text/javascript" src="assets/js/quiz.js"></script>-->
        <script type="text/javascript" src="assets/js/quiz.js"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
