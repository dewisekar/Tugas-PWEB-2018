<?php include "action_quiz.php"; ?>

<?php session_start(); ?>	
<?php
	//Set question number
	//Set question number
	$number = (int) $_GET['n'];
	$iterate = (int) $_GET['iterate'];

	//Get total number of questions
	$query = "select * from questions";
	$results = mysqli_query($con, $query) or die($mysqli->error.__LINE__);
	$total=mysqli_num_rows($results);

	// Get Question
	$query = "select * from `questions` where q_no = $number";

	//Get result
	$result = mysqli_query($con, $query) or die($mysqli->error.__LINE__);
	$question = mysqli_fetch_assoc($result);


	// Get Choices
	$query = "select * from `choices` where q_no = $number";	//Get results
	$choices = mysqli_query($con, $query) or die($mysqli->error.__LINE__);
	
	
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>PHP Quizzer</h1>
	</div>
      </header>


      <main>
     <div class="container">
        <div class="current">Question <?php echo $iterate; ?> of <?php echo $total; ?></div>
        <?php echo $row[1]['q_no']?>
		<p class="question">
	   	<?php echo $question['question'] ?>
		</p>
		<form method="post" action="process.php">
	      <ul class="choices">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li><input name="choice" type="radio" value="<?php echo $row['c_id']; ?>" />
		  <?php echo $row['choice']; ?> <?php echo $row['c_id']; ?>
		</li>
		<?php endwhile; ?>
	      </ul>
	      <input type="submit" value="submit" />
	      <input type="text" name="number" value="<?php echo $number; ?>" />
	      <input type="text" name="iterate" value="<?php echo $iterate; ?>" />
	</form>
      </div>
    </div>
    </main>

    <footer>
      <div class="container">
      	   Copyright &copy; 2015, PHP Quizzer
      </div>
    </footer>
  </body>
</html>