<?php 

	class Car{

		var $doors = 4;

		var $color = "grey";

		function changeDoors(){

			$this->doors = 6;
		}
	}

	class Plane extends Car { // extends is the key word to inheritance

		var $color = "blue"; //yo can overwrite attributes
	}

	$jet = new Plane();

	$jet->changeDoors();

	echo $jet->doors;

	echo $jet->color;

 ?>