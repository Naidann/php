<?php 
require_once 'duck.php';
require_once 'flywithwings.php';

class MallardDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new FlyWithWings();
	}

	public function display() {
		echo 'Я обычная утка!<br>';
    }
}
?>