<?php

require_once 'CarInterface.php';
require_once 'OilCarInterface.php';

class Toyota implements CarInterface,OilCarInterface
{
    

	public function oileEngin() {
	}
	
	/**
	 * @return mixed
	 */
	public function openTheDoor() {
		echo "open the door";
	}
	
	/**
	 * @return mixed
	 */
	public function fireTheEngin() {
	}
}


// $car = new Toyota;
// $car->openTheDoor();