<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Switch Stament PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$number = 11;

		switch ($number) {
			case 7:
				echo 'It is seven';
				break;
			
			case 10:
				echo "It is ten";
				break;

			default:
				echo "we could not find anything";
		}

	 ?>
</body>
</html>