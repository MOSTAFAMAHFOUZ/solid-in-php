<?php

require_once 'CarInterface.php';
require_once 'ElectricCarInterface.php';

class Tesla implements CarInterface,ElectricCarInterface
{
    
	public function electricEngin() {
	}
	
	/**
	 * @return mixed
	 */
	public function openTheDoor() {
	}
	
	/**
	 * @return mixed
	 */
	public function fireTheEngin() {
	}
}
