<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Functions PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		function initializer() {

			say_somenthing(); 
			echo "<br>";
			addition(234, 213);
		}

		function say_somenthing() {

			echo "Hello fellows, how are you doing?";
		}

		function addition($x, $y) {

			$answer = $x + $y;
			echo "the answer is " . $answer;
		}

		initializer();


		// Another function

		function greetings($message) {

			echo $message;
		}

		greetings("<br> Halo, wie geht's?");

	 ?>
</body>
</html>