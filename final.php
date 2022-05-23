<?php 

session_start();

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
				<h2>Your Result</h2>
				<label>Congratulation You have completed this test succesfully.</label>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>

	</main>










</body>
</html>