<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>String Functions PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$string = "This is a string";

		// to show the length of the string

		echo "the length of this string: " . strlen($string);

		echo "<br>";

		// convert a string to uppercase

		echo "convert to uppercase: " . strtoupper($string);
		echo "<br>";

		// convert a string to lowercase

		echo "convert to lowercase: " . strtolower($string);
		echo "<br>";

	 ?>
</body>
</html>