<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>While Loop PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$counter = 0;

		while ($counter < 10) {
			
			echo $counter;
			echo "<br>";

			$counter += 1;
		}

	 ?>
</body>
</html>