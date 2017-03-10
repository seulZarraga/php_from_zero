<?php 

	class Car{

		public $doors = 4;

		protected $color = "grey"; //you can use protected vars in this classes and in its sub classes

		private $hood = 1; // private vars only works in its class

		var $wheels = 4;

		// constructor works to contruct or assign some values when you create a new instance
		//not like functions which you have to call after create a new instance

		function setColor(){ 

			echo $this->color = "yellow";
		}
	}

	$audi = new Car();

	echo $audi->setColor(); // if I try to acces with $audi->color; it launch an error

	
 ?>