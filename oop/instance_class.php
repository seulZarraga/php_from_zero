<?php 

	class Car{

		var $doors = 4;

		var $colors = "grey";

		function changeDoors(){

			$this->doors = 6;
		}
	}

	$jetta = new Car(); // instance the Car class

	echo $jetta->doors . "<br>" ;

	echo $jetta->color = "red" . "<br>";

	$jetta -> changeDoors();

	echo $jetta->doors;
 ?>