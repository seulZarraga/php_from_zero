<?php 

	print_r($_GET);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Get Method</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<?php 

		$id = 10;

		$button = 'Click here';

	 ?>

	 <a href="get_method.php?id=<?php echo $id ?>"><?php echo $button ?></a>
	
</body>
</html>