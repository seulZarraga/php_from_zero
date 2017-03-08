<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Array Functions PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$my_list = array(234, 211, 456, 653, 324);

		//to show the max value

		echo "the max value of my_list is: " . max($my_list);
		echo "<br>";

		// to show the min value

		echo "the min value of my_list is: " . min($my_list);
		echo "<br>";

		// to sort the list

		sort($my_list);

		print_r($my_list);
		echo "<br>";

	 ?>
</body>
</html>