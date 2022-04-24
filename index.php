<?php 
header('Content-Type: text/html; charset=utf-8');
require_once 'programmer.php';

$p1 = new Programmer('Валерий', 'Жмышенко', 'Альбертович');
$p1->addLang('c++');
$p1->addLang('java');
$p1->addLang('php');
$p1->display();

?>
