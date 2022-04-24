<?php 
require_once 'strategy.php';

class ConcreteStrategyAdd implements Strategy {
	public function execute($a, $b) {
		return $a + $b;
	}
}
?>
