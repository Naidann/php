<?php
     session_start();
     if (!isset($_SESSION['reg'])){
     	header('Location: login.php');
     }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
	<h1>Привет, <?php echo $_SESSION['user_login'];?></h1>
	<a href="logout.php">Выйти</a><br>
	<a href="profile.php">Настройки</a>
</body>
</html>