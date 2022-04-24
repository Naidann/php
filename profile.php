<?php
    require_once 'user.php';
    session_start();
    if (!isset($_SESSION['reg'])) {
    	header('Location: login.php');
    }


    $user = new User();

   if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age'])) {
   	$user->load_from_form();
   	$user->save_to_session();
   }
   else {
   	$user->load_from_session();
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet"  href="" src="style.css">
</head>
<body>
<form action="" method="post">
	<span>Имя:</span><input type ="text" name="name" value="<?php echo $user->get_name();?>"><br>
	<span>Фамилия:</span><input type ="text" name="surname" value="<?php echo $user->get_surname();?>"><br>
	<span>Возраст:</span><input type ="text" name="age" value="<?php echo $user->get_age();?>"><br>
	<input type="submit"><br>
</form>
<a href="index.php">На главную</a>
</body>
</html>