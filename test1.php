<?php
	include 'action_quiz.php';
?>
<?php for ($i=0;$i<sizeof($row);$i++) { ?>
	<tr>
		<td> <?php echo $row[$i]['q_no'] ?></td>
	</tr>
<?php } ?>
<a href="quiz.php?n= <?php echo $row[0]['q_no']?>&iterate=0" class="start">Start Quiz</a>