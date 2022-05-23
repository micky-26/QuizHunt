<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>QUIZHUNT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>

	<header>
		<div class="container">
			<h1>QUIZHUNT</h1>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Test Your Programming Knowledge</h2>
				<p>
					<label>This is a multiple choise quiz to test your Programming Knowledge.</label>
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choice</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="start">Start Quiz</a>

			</div>

	</main>


	
