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
<form enctype="multipart/form-data" action="controllers/advadd.php" method="POST">    
	<div class="container" style="margin-top: 7%;">
		<strong>Описание<font color="red">*</font></strong><br/>
		<textarea rows="5" cols="50"></textarea>
		<p><strong>Фото</strong></p>
		<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
		<input type="file" name="photo" accept="image/*"><br/><br/>
		<button type="submit" name="send_adv">Подать объявление</button>  <button type="submit" name="viewAdv">Предпросмотр</button>
	</div>
</form>

</body>
</html>
