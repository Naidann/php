<?php 

class Group {
	private $id;
	private $title;
	private $students = array();
	private $discipline = array();

	public function __construct($i, $t) {
		$this->id = $i;
		$this->title = $t;
	}

	public function getTitle() {
		return $this->title;
	}

	public function addStudent($s) {
		array_push($this->students, $s);
	}

	public function show() {
		echo '<h1>Группа '.$this->title. '</h1>';
		echo '<h2> Список студентов</h2>';
		foreach ($this->students as $student) {
			$student->display();
		}
	public function addDiscipline($d) {
		array_push($this->students, $d);
	}

	}
}

?>