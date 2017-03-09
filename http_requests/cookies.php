<?php
	
	$name = 'SomeCookieName';
	$value = 'this is the value for my coookie';
	$expiration = time() + (60*60*24*7);

	setcookie($name, $value, $expiration);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookies PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Cookies</h1>

	<?php 

		if(isset($_COOKIE["SomeCookieName"])) {

			$someOne = $_COOKIE["SomeCookieName"];

			echo "The value of your cookie is: " . $someOne;
		}else{
			echo "The cookie was not set";
		}

	 ?>
</body>
</html>