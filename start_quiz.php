<?php
// Global variable which will be used to store the paths of the images to be
// displayed onscreen 
//$images = null;

// Load function declarations. These won't do anything until they're
// explicitly invoked, which is done by the call to main() at the bottom of
// this file

function main()
{
  //global $images;
  
  //$images = fetch_images_from_file_system();
  create_database();
}
//CREATE USER 'myuser'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'myuser'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `myuser\_%`.* TO 'myuser'@'localhost';

function create_database()
{
	/*
	
	
	
	
	
$connection->query
(
"SELECT `rating_id` FROM `ratings`;"
)
or	

$connection->query
(
'CREATE TABLE `movies_database`.`ratings`
(
	`rating_id` INT NOT NULL AUTO_INCREMENT,
	`rating` INT NOT NULL,
	`movie_id` INT NOT NULL,
	`user_id` INT NOT NULL,
	PRIMARY KEY (`rating_id`),
	foreign key (`movie_id`) references `movies`(`movie_id`),
	foreign key (`user_id`) references `users`(`user_id`)
);'
)
or die($connection->error);



/* 
//update inception
$connection->query
(
"UPDATE `movies_database`.`movies`
SET `wallpaper` = 'inception-wallpaper.jpg'
WHERE `movie_id` = 10;"
)
or die($connection->error);
*/
/* 
$sql="SELECT count(*) as count FROM movies";

$result=$connection->query($sql);
					
if(!$result)
{
	echo"Could not execute sql query";
}

while($row=$result->fetch_assoc())
{
	$full = $row["count"];
}


//insert////////////////////////////////////////////////

if($full==0)
{
	$connection->query
 */	
	
	
	
	/*
	$dbhost = '127.0.0.1:3306';
	$dbuser = 'root';
	$dbpass = ''; 
	*/
	
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$dbname = 'quiz';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	if( !$conn ) 
	{
		die("Could not connect: " . mysqli_error());
	}


	/* 
	$sql = 'CREATE Database Quiz';

	$retval = mysqli_query( $conn, $sql );

	mysqli_select_db($conn,"Quiz");
	 */
	 
	 
	$conn->query
	(
	"SELECT `quiz_id` FROM `questions`;"
	)
	or
	$conn->query
	(
	'CREATE TABLE questions
	(
		quiz_id int primary key,question  varchar(500) not null,choice1 varchar(500),choice2 varchar(500),
		choice3 varchar(500),answer varchar(500)
	);'
	)
	or die($conn->error);
	
	/* 
	$sql2="CREATE TABLE questions
	(
		quiz_id int primary key,question  varchar(500) not null,choice1 varchar(500),choice2 varchar(500),
		choice3 varchar(500),answer varchar(500)
	)";
	$retval = mysqli_query( $conn, $sql2 );
	 */
	
	/* 
	
	
	if(!$retval)
	{
		echo"Could not create table questions";
	}
	*/
	
	$sql="SELECT count(*) as count FROM questions";

	$result=$conn->query($sql);
						
	if(!$result)
	{
		echo"Could not execute sql query";
	}

	while($row=$result->fetch_assoc())
	{
		$full = $row["count"];
	}


	//insert////////////////////////////////////////////////

	if($full==0)
	{
		$sql3 = "INSERT INTO questions(quiz_id,question,choice1,choice2,choice3,answer)
		VALUES(1,'Which is the capital of Sweden?','Uppsala','Gothenburg','Oslo','Stockholm'),
		(2,'Which is the 5th largest country by population?','United States of America','China','India','Brazil'),
		(3,'Which is the largest country by area?','China','Brazil','Australia','Russia'),
		(4,'Which is the highest mountain?','Olympus','Makalu','Manaslu','Everest'),
		(5,'Which is the largest ocean?','Caribbean Sea','Arctic Ocean','Mediterranean Sea','Pacific Ocean'),
		(6,'How many states do USA constist of?','56','48','40','50'),
		(7,'Which is the largest island by area in Greece?','Corfu','Mykonos','Euboea','Crete'),
		(8,'Which is the largest desert?','Sahara','Gobi Desert','Patagonian Desert','Maudlandia'),
		(9,'Which is the bussiest port?','Piraeus','Singapore','Santos','Shanghai'),
		(10,'Which is the largest forest','Taiga','Equador Cloud Forest','Daintree','Amazon Forests')";

	$retval2 = mysqli_query( $conn, $sql3 );
	}
	
	/* 
	$sql3 = "INSERT INTO questions(quiz_id,question,choice1,choice2,choice3,answer)
	VALUES(1,'Which is the capital of Sweden?','Uppsala','Gothenburg','Oslo','Stockholm'),
	(2,'Which is the 5th largest country by population?','United States of America','China','India','Brazil'),
	(3,'Which is the largest country by area?','China','Brazil','Australia','Russia'),
	(4,'Which is the highest mountain?','Olympus','Makalu','Manaslu','Everest'),
	(5,'Which is the largest ocean?','Caribbean Sea','Arctic Ocean','Mediterranean Sea','Pacific Ocean'),
	(6,'How many states do USA constist of?','56','48','40','50'),
	(7,'Which is the largest island by area in Greece?','Corfu','Mykonos','Euboea','Crete'),
	(8,'Which is the largest desert?','Sahara','Gobi Desert','Patagonian Desert','Maudlandia'),
	(9,'Which is the bussiest port?','Piraeus','Singapore','Santos','Shanghai'),
	(10,'Which is the largest forest','Taiga','Equador Cloud Forest','Daintree','Amazon Forests')";

	$retval2 = mysqli_query( $conn, $sql3 );
	 */
	
	/* 
	if(!$retval2)
	{
		echo"Could not insert data into table questions";
	}
	*/
	mysqli_close($conn);
}

// Execution begins here, since this is the first line that's not contained
// inside of a function. To start thigns off, we'll invoke the main()
// function, which is defined above.
main();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  	<title>START_QUIZ</title>
  	<style type="text/css">
		body
		{
			background-color: steelblue;
			text-align: center;
		}
		#container
		{
			margin-top: 100px;
		}
  	</style>
  </head>
  <body>
	<h1>Welcome to GeoQuiz!</h1>
	<div id="container">
		<form action="quiz_questions.php" method="post">
			<img src="images/quiz.png" id="quiz" alt="QUIZ PIC">
			<br>
			<br>
			<input type="submit" value="Start"/>
		</form>
	</div>
  </body>
</html>