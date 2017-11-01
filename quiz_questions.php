<?php
session_start();
// Global variable which will be used to store the paths of the images to be
// displayed onscreen 
$questions = null;
$ans_array = null;
$quiz_id = null;
$id = null;
$answer = null;
$choice1 = null;
$choice2 = null;
$choice3 = null;
$time_start = null;
/* 
$question1 = null;
$question2 = null;
$question3 = null;
$question4 = null;
$question5 = null;
$question6 = null;
$question7 = null;
$question8 = null;
$question9 = null;
$question10 = null;
*/
//$ans_array = null;
// Load function declarations. These won't do anything until they're
// explicitly invoked, which is done by the call to main() at the bottom of
// this file

function main()
{
	
	
	global $questions;
	global $ans_array;
	global $quiz_id;
	global $id;
	global $answer;
	global $choice1;
	global $choice2;
	global $choice3;
	
	global $time_start;
	
	
	$time_start = microtime(true);
	
	$_SESSION['time'] = $time_start;
	
	$questions = array();
	$ans_array = array();
	$quiz_id = array();
	$id = array();
	$answer = array();
	$choice1 =array();
	$choice2 =array();
	$choice3 =array();
	
	/* 
	global $question1;
	global $question2;
	global $question3;
	global $question4;
	global $question5;
	global $question6;
	global $question7;
	global $question8;
	global $question9;
	global $question10;
   */
  //$questions = array();
  
  
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$dbname = 'quiz';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	//$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	
	//mysqli_select_db($conn,"Quiz");
	
	$sql4="SELECT quiz_id, question,choice1,choice2,choice3,answer FROM Questions
			ORDER BY RAND()
			LIMIT 6";
	
	$result=$conn->query($sql4) ;
			
	if(!$result)
	{
		echo"Could not execute sql4 query";
	}
	
	$x=0;
	
	while($row=$result->fetch_assoc())
	{
		//echo $row["quiz_id"], $row["question"], $row["choice1"], $row["choice2"], $row["choice3"], $row["answer"];
		
		array_push($ans_array, $row["choice1"], $row["choice2"], $row["choice3"], $row["answer"]);
		//echo json_encode($ans_array[3]);
		
		array_push($quiz_id, $row["quiz_id"]);
		//echo json_encode($quiz_id);
		
		array_push($id, $x);
		//echo json_encode($id);
		
		array_push($questions, $row["question"]);
		//echo json_encode($questions);
		
		array_push($choice1,$row["choice1"]);
		//echo json_encode($choice1);
		
		array_push($choice2,$row["choice2"]);
		//echo json_encode($choice2);
		
		array_push($choice3,$row["choice3"]);
		//echo json_encode($choice3);
		
		array_push($answer,$row["answer"]);
		//echo json_encode($answer);
		
		$x++;
	}
	
  
	//$questions = random_questions(); // //important!!!!!!!!!!!!!!$questions[] and not $questions xwris[]
	//echo "main" . $questions[0];
}

/* 
function random_questions()
{
	
	//$dbhost = '127.0.0.1:3306';
	//$dbuser = 'root';
	//$dbpass = '';
	
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$dbname = 'quiz';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	//$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	
	//mysqli_select_db($conn,"Quiz");
	
	$sql4="SELECT quiz_id, question,choice1,choice2,choice3,answer FROM Questions
			ORDER BY RAND()
			LIMIT 6";
	
	$result=$conn->query($sql4) ;
			
	if(!$result)
	{
		echo"Could not execute sql4 query";
	}
	
	$questions_array = Array();

	while($row=$result->fetch_assoc())
	{
		array_push($questions_array, $row["quiz_id"], $row["question"], $row["choice1"], $row["choice2"], $row["choice3"], $row["answer"]);
	}
	
	echo "func" . $questions_array[0];
	
	//echo "func" . $questions_array[0]->question;
	
	return $questions_array;
	
}
*/

// Execution begins here, since this is the first line that's not contained
// inside of a function. To start thigns off, we'll invoke the main()
// function, which is defined above.
main();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  	<title>QUIZ_QUESTIONS</title>
  	<style type="text/css">
		body
		{
			background-color: steelblue;
		}
		h1
		{
			text-align: center;
		}
		#container
		{
			margin-top: 20px;
			margin-left: 40%;
			margin rith: 40%;
			text-align: left;
			display: inline-block;
			
		}
  	</style>
  </head>
  <body>

    <h1>Play GeoQuiz</h1>
    <div id="container">
		<?php 
		//echo "eeeeeeeeeeeeeeee$questions[0]" . $questions[0] . "eeeeee\n";
		/* 
		$questions_array = array();
		$choice1_array = array();
		$choice2_array = array();
		$choice3_array = array();
		$answer_array = array();
		 */
		 /*
		$questions_array = array_column($questions, 'question');
		$choice1_array = array_column($questions, 'choice1');
		$choice2_array = array_column($questions, 'choice2');
		$choice3_array = array_column($questions, 'choice3');
		$answer_array = array_column($questions, 'answer');
		
		print_r ($questions_array);
		print_r ($choice1_array);
		print_r ($choice2_array);
		print_r ($choice3_array);
		print_r ($answer_array);
		*/
		/* 
		echo $questions_array;
		echo $choice1_array;
		echo $choice2_array;
		echo $choice3_array;
		echo $answer_array;
		 */
		?> 
		<form action="quiz_result.php" method="post">
		
			<?php
			//echo json_encode($answer);
			for($x=0; $x<6; $x++)
			{
			?>
				<?php 
				$possible_choices = array($choice1[$x], $choice2[$x], $choice3[$x], $answer[$x]);
				shuffle($possible_choices); 
				?>
				
				<p class="question"><?=$x+1?>.<?=$questions[$x]?></p>
				
				<input class="choice" type="radio" name="<?=$id[$x]?>" value="<?=$possible_choices[0]?>" required> <?=$possible_choices[0]?><br>
				<input class="choice" type="radio"  name="<?=$id[$x]?>" value="<?=$possible_choices[1]?>"> <?=$possible_choices[1]?><br>
				<input class="choice" type="radio"name="<?=$id[$x]?>" value="<?=$possible_choices[2]?>"> <?=$possible_choices[2]?><br>
				<input class="choice" type="radio"name="<?=$id[$x]?>" value="<?=$possible_choices[3]?>"> <?=$possible_choices[3]?><br>
				
				<!--<input type='hidden' name='input_id' value="<?//php echo htmlentities(serialize($id)); ?>" /> -->
				<input type='hidden' name='input_answer' value="<?php echo htmlentities(serialize($answer)); ?>" />
				<input type='hidden' name='input_question' value="<?php echo htmlentities(serialize($questions)); ?>" />
				
				
				
				
			<?php
			}
			?>
			
			
			<?php
			//foreach($questions as $row)
			//{
			?>
				<?php
				//echo "row=" . $row;
				//echo "row=" . $row->choice1;
				//$ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
				//$ans_array = array($row["choice1"], $row["choice2"], $row["choice3"], $row["answer"]);
				//shuffle($ans_array);
				?>
				
				<!--
				<p><?//=$row->quiz_id?>.<?//=$row->question?></p>
				
				<input type="radio" name="quizid" value="<?//=$ans_array[0]?>" <?//=$ans_array[0]?>/><br>
				<input type="radio" name="quizid" value="<?//=$ans_array[1]?>" <?//=$ans_array[1]?>/><br>
				<input type="radio" name="quizid" value="<?//=$ans_array[2]?>" <?//=$ans_array[2]?>/><br>
				<input type="radio" name="quizid" value="<?//=$ans_array[3]?>" <?//=$ans_array[3]?>/><br>
				-->
			<?php 
			//}
			?>
			<br>
			<br>
		  <input type="submit" value="Finish"/>
		</form>
	</div>
  </body>
</html>