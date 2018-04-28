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
	$query = "Select * from questions";
	$qry="SELECT * FROM choices inner join questions on questions.q_no = choices.q_no where c_no = 1";
	$qry2="SELECT * FROM choices inner join questions on questions.q_no = choices.q_no where c_no = 2";
	$qry3="SELECT * FROM choices inner join questions on questions.q_no = choices.q_no where is_correct = 1";
	$result = mysqli_query($con,$query);
	$result2 = mysqli_query($con,$qry);
	$result3 = mysqli_query($con,$qry2);
	$result4 = mysqli_query($con,$qry3);

	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$row1 = mysqli_fetch_all($result2,MYSQLI_ASSOC);
	$row2 = mysqli_fetch_all($result3,MYSQLI_ASSOC);
	$row3 = mysqli_fetch_all($result4,MYSQLI_ASSOC);


	mysqli_close($con);

    $act = isset($_GET['act']) ? $_GET['act']:"";
    if ($act=="del") {
        $nrp = $_GET['q_no'];
        echo $nrp;
        include("dbconnect.php");
        $cuk=mysqli_query($con, "DELETE FROM questions WHERE q_no=$nrp");
        mysqli_close($con);
        header("location:managequiz.php");
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
        <title>Manage Your Questions!</title>
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
        <link rel="stylesheet" href="assets/css/table.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/login_modal.css" rel="stylesheet">
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
                                <li>
                                    <a href="admin.php" class="fa-dashboard ">Admin Dashboard</a>
                                </li>
                                <li>
                                    <span class="fa-puzzle-piece">Manage Quiz</span>
                                    <ul>
                                        <li>
                                            <a href="managequiz.php">Manage Questions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="action_logout.php" class="fa-power-off ">Log Out</a>
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
                    	
                        <!-- Intro / Why Us? -->
                        <div class="row">
							<div class="col-md-12 animate fadeInUp">
                                <h2 class="margin-bottom-20" style="text-align: center;">Quiz Question Manager</h2>
                        	</div>
                            <div class="col-md-12 animate fadeInUp">
                                <p style="text-align: center;">Note: The correct answer indicates the type B one!</p>
                                <p style="text-align: center;">If you want to edit the question or answer, please delete the question first and then insert the new one! Thank You!</p>
                            </div>
                        </div>
                        <div class="row">
                        	<?php
                        		$no = "0";
                        		?>
                        	<table class="container">
								<thead>
									<tr>
										<th><h1>No.</h1></th>
										<th><h1>Questions</h1></th>
										<th><h1>Choice 1</h1></th>
										<th><h1>Choice 2</h1></th>
										<th><h1>Correct Answer</h1></th>										
										<th><h1>Action</h1></th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i=0;$i<sizeof($row);$i++) { ?>
									<tr>

											<td> <?php echo ++$no?></td>
											<td> <?php echo $row[$i]['question']?></td>											
											<td> <?php echo $row1[$i]['choice']?></td>
											<td> <?php echo $row2[$i]['choice']?></td>
											<td> <?php echo $row3[$i]['c_no']?></td>
											<td> <a href="?act=del&q_no=<?php echo $row[$i]['q_no']?>" style="color: white">Delete</a></td>
									</tr>
										<?php } ?>
																	
								</tbody>
							</table>
						</div>
                    </div>
                </div>
            </div>
            <div id="forms" class="parallax-bg1 text-light background-primary" style="background: #451733; opacity: 1">
            <div class="container">
                <div class="row margin-vert-40">
                    <!--harapan-->
                     <div class="col-md-12">
                        <h2 class="text-center article-title" style="font-size: 35px; font-weight: bold;">Add Question!</h2>
                         <form class="tambahpertanyaan" method="POST" action="action_addquestion.php">
       				
         				  <div class="container">
         				  	 <label for="qno"><b>Questions Number</b></label>
         				    <input type="text" placeholder="Enter Questions Number" name="q_no" value="<?php echo ++$no?> " required>

         				    <label for="uname"><b>Enter Question</b></label>
         				    <input type="text" placeholder="Enter Question" name="question" required>
       				
         				    <label for="choice1"><b>Choice 1</b></label>
         				    <input type="text" placeholder="Enter Choice 1" name="choice1" required>

         				    <label for="choice2"><b>Choice 2</b></label>
         				    <input type="text" placeholder="Enter Choice 2" name="choice2" required>

         				    <label for="correct"><b>Correct Answer</b></label>
         				    <input type="text" placeholder="Enter 1 or 2" name="correct" required>
         				    <a>
	     				    	<input type="submit" value="Add Question" name="submit" >
	     				    </a>
         				  </div>        
                    </div>
                    
                </div>
                    <!-- End Icons -->
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