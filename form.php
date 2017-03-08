<?php 

	if(isset($_POST['submit'])){

		$minimum = 4;
		$maximum = 10;
		$names = array('Seul', 'Paps', 'Primitivo', 'Beatriz');

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(strlen($username) < $minimum){

			echo "The username has to be longer than five characters";

		}
		if(strlen($username) > $maximum){

			echo "The username has to be shorter than ten characters";

		}

		if(!in_array($username, $names)){

			echo "Sorry, " . $username . " you're not allowed";

		}else {

			echo "Welcome ". $username;

		}

		// echo "username: " . $username;
		// echo "<br>password: " . $password;
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="form.php" method="post">
		<input type="text" placeholder="Enter your username" name="username">
		<input type="password" placeholder="Enter your password" name="password">
		<input type="submit" name="submit">
	</form>
</body>
</html>