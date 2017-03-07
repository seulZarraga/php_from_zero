<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Return Function Values PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		function addNumbers($number1, $number2) {
			$sum = $number1 + $number2;
			return $sum;
		}

		$result = addNUmbers(432, 431);

		$result = addNumbers(678, $result);

		echo $result;

	 ?>
</body>
</html>