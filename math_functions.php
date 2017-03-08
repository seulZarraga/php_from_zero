<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Math Functions PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		// power function

		$power = pow(2, 3); // this return 2*2*2

		echo $power . '<br>';

		// random function

		echo "random number between 1 and 1000: " . rand(1, 1000);

		echo "<br>";

		// square root function

		echo "square root: " . sqrt(100);
		echo "<br>";

		// ceilor function

		echo "ceil: " . ceil(4.3);
		echo "<br>";

		// floor function

		echo "floor: " . floor(4.9);

		echo "<br>";

		// round function

		echo "round: " . floor(4.4);

		echo "<br>";


	 ?>
</body>
</html>