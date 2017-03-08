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
	}

 ?>