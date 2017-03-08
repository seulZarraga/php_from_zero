<?php 

		$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

		if($connection){

			echo "connected";
		}else {

			die("somenthing went wrong");
		}

		$query = "SELECT * FROM users";


		$result = mysqli_query($connection, $query);

		if(!$result) {
	
			die('query failed ' . mysqli_error());
		}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dat read</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<?php 

					while ($row = mysqli_fetch_assoc($result)) {
				?>
				<pre>
					<?php 

						print_r($row);

					 ?>
				</pre>
					<?php 	
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>