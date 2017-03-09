<?php 

	if(isset($_POST["name"])){

		echo "name: " . $_POST["name"];
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Post Method</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="post_method.php" method="post">
		<input type="text" name="name">
		<input type="submit">
	</form>
</body>
</html>