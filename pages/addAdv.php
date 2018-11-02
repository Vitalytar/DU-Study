<?php
  include '../controllers/advadd.php';
?>
<?php
	include_once("../includes/header.php");
?>
<html>
<head>
	<title>ADVMAST - Войти</title>
  <meta charset="UTF-8">
</head>
<body>
<form enctype="multipart/form-data" action="addAdv.php" method="POST">
<?php
	if(isset($_COOKIE['login']) && isset($_COOKIE['id'])) {
		echo '<div class="container" style="margin-top: 7%;">
	<select name="state" class="form-control input-sm" style="width: 20%;">
		<option class="invisible">Состояние</option>
		<option>Новое</option>
		<option>Идеальное</option>
		<option>Хорошее</option>
		<option>Удовлетворительное</option>
		<option>Неудовлетворительное</option>
	</select><br/>
		<p><strong>Название<font color="red">*</font></strong><br/>
		<input class="form-control input-sm" style="width: 20%;" type="text" name="thing" maxlength="50"></p>
		<strong>Описание<font color="red">*</font></strong><br/>
		<textarea class="form-control input-sm" style="width: 40%;" rows="5" cols="50" name="advtext"></textarea>
		<p><br/><label for="number"><strong>Цена<font color="red">*</font></strong></label><br/>
		<input class="form-control input-sm" style="width: 20%;" type="number" name="price" min="1" max="9999999"></p>
		<button type="submit" name="send_adv" class="btn btn-dark">Подать объявление</button>
	</div>';
	} else {
		echo '<div style="margin-top: 7%;"><h1>Подавать объявления могут только зарегестрированные пользователи!</h1><br/>
		<a href="Login.php">Авторизация</a><br/>
		<a href = "Registration.php">Регистрация</a></div>';
	}
	
?>
</form>

</body>
</html>