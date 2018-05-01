<?php include 'action_quiz.php';  ?>
<?php session_start(); ?>
<?php 
	
	if (!isset($_SESSION['score'])){
	   $_SESSION['score'] = 0;
	}

	//Check if form was submitted
	if($_POST){
		$number = $_POST['number'];
		$iterate = $_POST['iterate'];
		$selected_choice = $_POST['choice'];
	
		//Get total number of questions
		$query="SELECT * FROM `questions`";
		$results = mysqli_query($con, $query) or die($mysqli->error.__LINE__);
		$total=mysqli_num_rows($results);

		//nyari jawaban bener
		$q = "select * from `choices` where q_no = $number and is_correct=1";
		$result = mysqli_query($con, $q) or die($mysqli->error.__LINE__);
		$monk = mysqli_fetch_assoc($result);
		$correct_choice=$monk['c_id'];
		echo $correct_choice;
		echo $selected_choice;
		//compare answer with result
		if($correct_choice == $selected_choice){
			$_SESSION['score'] = ++$_SESSION['score'];
		}
	
		$iterate=++$iterate;
		echo $iterate;
		echo $row[1]['q_no'];
		if($jumlah == $iterate){
			header("Location: index.php");
			exit();
		} else {
				
		        header("Location: quiz.php?n=%20".$row[$iterate]['q_no']."&score=".$_SESSION['score']."&iterate=".$iterate);
		}
	}
?>