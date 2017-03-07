<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Foreach Loop PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$numbersList = array(131, 4354, 453, 234);

		foreach ($numbersList as $number) {
			
			echo $number . "<br>";
		}

	 ?>
</body>
</html>