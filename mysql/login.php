<?php 

	if(isset($_POST['submit'])){

		$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

		$name = $_POST['name'];
		$password = $_POST['password'];

		if($connection){

			echo "connected";
		}else {

			die("somenthing went wrong");
		}

		$query = "INSERT INTO users(name, password)";
		$query .= "VALUES ('$name', '$password')";

		$result = mysqli_query($connection, $query);

		if($result) {

			echo "query saved";
		}else {

			die('query failed ' . mysqli_error());
		}


		// if($name && $password) {

		// 	echo "both";
		// }else {

		// 	echo "you have to enter the both fields";
		// }
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<form action="login.php" method="post">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<input class="btn btn-primary" type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>
</body>
</html>