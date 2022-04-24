<?php
     session_start();
     if (!empty($_POST['name']) && !empty($_POST['pas'])) {
     	$name = $_POST['name'];
     	$password = $_POST['pas'];
     	if ($name === 'Naidan' && $password === '123') {
     		$_SESSION['reg'] = 1;
     		$_SESSION['user_login'] = $name;
     		header('Location: index.php');	
     	}
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
	<div id="content">
		<form action="" method="post">
			<h3>Авторизация</h3>
			<input type="text" name="name" placeholder="Логин"><br>
			<input type="text" name="pas" placeholder="Пароль"><br>
			<input type="submit" name="">
		</form>
	</div>
</body>
</html>