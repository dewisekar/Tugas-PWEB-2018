<!-- === BEGIN HEADER === -->
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
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/modal.css" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/quiz.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="assets/css/quiz.css" rel="stylesheet">
      
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
        <div id="quis" class="background-white">
            <div class="container">
                <div class="row margin-vert-40">                    <!-- Main Text -->
                    <div class="grid">
                
                    <h1 style="text-align: center;">Are you more Type A or Type B?</h1>
                    <p style="text-align: center;"> Take this quiz and get certificate!</p>
                    <div class="name" id="inputnamah">
                        <div class="col-md-12">
                           <h2 style="margin-top: 30px; margin-bottom: 20px;"> Input Your Name:</h2>
                           <div class="col-md-4">
                           </div>
                           <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control form-control-lg" placeholder="Name" type="text" id="input-nama" style="margin-bottom: 20px; height: 50px; font-size: 27px;">
                                </div>
                            </div>
                            <div class="col-md-5" >
                            </div>                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!--<button class="btn btn-info btn-lg btn-block" id="btnInputNama">Start Quiz</button>-->
                                    <button id="btnInputNama" class="btn--default" style="transform: translateX(-15px);">Start Quiz!</button>
                                </div>
                            </div>
                             <div class="col-md-4"></div>
                        </div>
                        
                    </div>
                    <div id="quiz" class="centered grid__col--8" >
                        <div class="col-md-12">
                            <h2 id="question" style="margin-top: 20px;"></h2>
                            <h3 id="score"></h3>
                        </div>                    
                        <div class="col-md-12">
                            <p id="choice0"></p>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <button id="guess0" class="btn--default">Select Answer</button>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-12">                
                        <p id="choice1"></p>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <button id="guess1" class="btn--default">Select Answer</button>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <footer>
                            <div class="col-md-12"> 
                            <p id="progress">Question x of y</p>
                        </div>
                         </footer>
                    </div>
                
                    </div>
            </div>
    </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        
            <!-- End Footer -->
            <!-- The Modal -->
            <div id="myModal" class="modal">

             <!-- The Close Button -->
             <span class="close">&times;</span>

             <!-- Modal Content (The Image) -->
             <img class="modal-content" id="img01">

             <!-- Modal Caption (Image Text) -->
             <div id="caption"></div>
            
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
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>

            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
