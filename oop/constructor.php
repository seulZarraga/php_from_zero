<?php 

	class Car{

		var $doors = 4;

		var $color = "grey";

		// constructor works to contruct or assign some values when you create a new instance
		//not like functions which you have to call after create a new instance

		function __construct(){ 

			echo $this->doors = 6;
		}
	}

	$audi = new Car();

	
 ?>