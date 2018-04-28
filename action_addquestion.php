<?php
	include "dbconnect.php";
	$submit = @$_POST[ 'submit'];
	if($submit)
	{
		$question_number = $_POST['q_no'];      
   		$question_text = $_POST['question'];
   		$correct_choice = $_POST['correct'];
   		$choices[1] = $_POST['choice1'];
   		$choices[2] = $_POST['choice2'];
   		$lol[1]=1;
   		$lol[2]=2;

   		//query to table question
		$query="insert into questions (question) 
   	 	values('$question_text')";
   		$masuk = mysqli_query($con, $query);

   		$last_id = mysqli_insert_id($con);

   		if($masuk){
   			$no = "0";
      		foreach($choices as $choice => $value){

        		if($value != ''){ 
	       			if($correct_choice == $choice){
	          		$is_correct = 1;
	       		} 	
	       		else {
	         		$is_correct = 0;
	       		}
	       		$no = ++$no;	       		
              	$query="insert into choices (q_no,is_correct,choice, c_no) 
   	          	values('$last_id','$is_correct','$value', '$no')";
              	$masuk = mysqli_query($con, $query);
	          	if($masuk){
	            	continue;

	          	}else {
	      			die (mysqli_error());
	    		}
        	}    
   	 		}
		}
	?>
	 <script type="text/javascript">
		window.location.href="managequiz.php";
	 </script>
	<?php
	}
?>
    
