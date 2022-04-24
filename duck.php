<?php 

abstract class Duck {
	protected $flyBehavior;
	protected $quackBehavior;

	public function swim() {
		echo 'я плыву<br>';
	}

	abstract public function display();

	public function performFly() {
		$this->flyBehavior->fly();
	}
}

?>