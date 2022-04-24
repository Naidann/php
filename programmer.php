<?php 
require_once 'human.php';
require_once 'iprogrammer.php';

class Programmer extends Human implements iProgrammer {
	private $langs = array();

	public function addLang($l) {
		array_push($this->langs, $l);
	}
	public function getLangs() {
		return $this->langs;
	}

	public function display() {
		parent::display();
		echo '<h2>Список языков</h2>';
		foreach ($this->langs as $lang) {
			echo $lang.'<br>';
		}
	}
}

?>