<?php 
require_once 'context.php';
require_once 'concretestrategyadd.php';
require_once 'concretestrategysubstract.php';
require_once 'concretestrategymultiply.php';

if (!empty($_POST)) {
	$context = new Context();
	$x = $_POST['first_num'];
	$y = $_POST['last_num'];
	$act = $_POST['deistvie'];
	switch ($act) {
		case '+': $context->setStrategy(new ConcreteStrategyAdd()); break;
		case '+': $context->setStrategy(new ConcreteStrategySubstract()); break;
		case '+': $context->setStrategy(new ConcreteStrategyMultiply()); break;
		default: die('Неверное действие!');
	}
	$result = $context->executeStrategy($x, $y);
	echo '<h1>' .$result.'</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор</title>
</head>
<body>
	<form action="" method="post">
		<input type="tetx" name="first_num" placeholder="первое число">
		<select name="deistvie">
			<option value="+">+</option>
			<option value="+">-</option>
			<option value="+">*</option>
		</select>
		<input type="text" name="last_num" placeholder="второе число"><br>
		<input type="submit" value="Посчитать">
	</form>
</body>
</html>