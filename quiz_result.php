<?php
 
session_start();

$time_start = $_SESSION['time'];

$time_end = microtime(true);

$execution_time = ($time_end - $time_start);

//floor($execution_time * 100) / 100;

$execution_time = intval($execution_time);

$right_answers = unserialize($_POST['input_answer']);
$right_questions = unserialize($_POST['input_question']);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  	<title>QUIZ_RESULT</title>
  	<style type="text/css">
		body
		{
			background-color: steelblue;
			text-align: left;
		}
		#container
		{
			margin-top: 100px;
		}
  	</style>
	</head>
	<body>

	<!--Welcome bae -->

	<?php
	//$right_answers = unserialize($_POST['input_answer']);
	//$right_questions = unserialize($_POST['input_question']);
	
	?>
	
	<?php 

	
	/*
	$score = 0;

	print_r($_POST);

	//$right_ids = unserialize($_POST['input_id']);
	$right_answers = unserialize($_POST['input_answer']);
	$right_questions = unserialize($_POST['input_question']);


	if($_POST['0']==$right_answers[0])
	{
		echo $right_answers[0];
		$score++;
	}
	if($_POST['1']==$right_answers[1])
	{
		echo $right_answers[1];
		$score++;
	}
	if($_POST['2']==$right_answers[2])
	{
		echo $right_answers[2];
		$score++;
	}
	if($_POST['3']==$right_answers[3])
	{
		echo $right_answers[3];
		$score++;
	}
	if($_POST['4']==$right_answers[4])
	{
		echo $right_answers[4];
		$score++;
	}
	if($_POST['5']==$right_answers[5])
	{
		echo $right_answers[5];
		$score++;
	}

	echo "score= " . $score;
	*/
	?>


		<form action="start_quiz.php" method="post">
			
			<?php
			$score2 = 0;
			//echo json_encode($answer);
			for($x=0; $x<6; $x++)
			{
			?>
				<p><?=$x+1?>.<?=$right_questions[$x]?></p>
				
				<?php
				if($_POST[$x]!=$right_answers[$x])
				{
				?>
					<p><span style="background-color: #FF9C9E"><?=$_POST[$x]?></span></p>
					<p><span style="background-color: #ADFFB4"><?=$right_answers[$x]?></span></p>
				<?php				
				}
				else
				{
				?>
					<p><span style="background-color: #ADFFB4"><?=$_POST[$x]?></span></p>
				<?php			
					
					$score2++;
				}
				?>
				
				
			<?php
			}
			?>
			
			<br>
			<br>
			
			<h4>FINISHED IN: <?=$execution_time?> seconds</h4>
			
			
			<h2>YOUR SCORE: <?=$score2?>/6</h2>
			
			<!--<h1><?//=$score2?>/6</h1>-->
			
			<!--
			<h2>FINISHED IN:</h2>
			<h1><?//=$execution_time?> seconds</h1>
			-->
			
		  <input type="submit" value="Start Again"/>
		</form>















	</body>
</html>