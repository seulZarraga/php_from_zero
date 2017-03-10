<?php 

	class Car{

		function moveWheels(){

			echo "move the wheels";
		}
	}

	if(class_exists("Car")){

		echo "Yes, the class exists";
	}else {

		echo "Nope, the class does not esxist";
	}

	if(method_exists("Car", "moveWheels")){

		echo "the method exists";
	}else {

		echo "nope, the method does not exist";
	}

 ?>