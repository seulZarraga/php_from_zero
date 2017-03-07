<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Associative Array PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		// regular arrays

		$arrayList = array(12, 654, 'Pepe');

		//print_r($arrayList); 

		// asscociative arrays

		$nameList = array('first_name' => 'Seul', 'last_name' => 'Zarraga', 'second_last_name' => 'Espinona');

		//print_r($nameList);

		echo $nameList['second_last_name']; //show the value of array with its key name

		echo "<br>";

		echo "My name is " . $nameList['first_name'] . " " . $nameList['last_name']

	 ?>
</body>
</html>