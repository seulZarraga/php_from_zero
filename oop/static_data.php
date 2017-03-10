<?php 

	class Car{

		public $doors = 4;

		static $color = "grey"; //you can use protected vars in this classes and in its sub classes

		private $hood = 1; // private vars only works in its class

		static $wheels = 4;

		// constructor works to contruct or assign some values when you create a new instance
		//not like functions which you have to call after create a new instance

		function setColor(){ 

		     Car::$color = "yellow";
		}
	}

	/* to call a static data I need to use double colon after class name following to the attribute*/

	echo Car::$wheels;

	// I can't do this to acces to that data, $bmw->$wheels; it launchs an error

	// to call a function with static data

	Car::setColor();

	echo Car::$color;

	
 ?>