<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Scope PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$variable = "outside";
		function scope() {
			global $variable;
			$variable = "inside";
		}

		echo $variable;

		scope();

		echo "<br>";

		echo $variable;

	 ?>
</body>
</html>