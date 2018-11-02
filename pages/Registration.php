<?php
	require '../includes/contodatabase.php';
  	include_once("../includes/header.php");
?>
<form method="POST" action="../controllers/register.php">
	<script type="text/javascript">
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()	
	})
	</script>
  <title>ADVMAST - Регистрация</title>
  <meta charset="UTF-8">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-5">Обратите внимание!</h1>
    <p class="lead">Данные, введенные при регистрации, будут использованы при подаче объявления! Вводите актуальные данные</p>
  </div>
</div>
<div style="margin-top: 3%; margin-left: 25%;">
	<fieldset>
		<legend><strong>Регистрация</strong></legend>
	<div class="col-md-offset-5 col-md-8">
	<p>
		<p><label for="login"><strong>Ваш логин<font color="red">*</font></strong></label>  <img src="../../images/qMark.png" style="width: 15px; height: 15px;" data-toggle="tooltip" data-placement="bottom" title="Пример: ADVMAST"></p> 
		<input type="text" name="login" value="<?php echo @$data['login']; ?>" placeholder="Логин" class="form-control input-sm chat-input"> 
	</p>
	<p>
		<p><label for="email"><strong>Ваш адрес электронной почты<font color="red">*</font></strong></label>  <img src="../../images/qMark.png" style="width: 15px; height: 15px;" data-toggle="tooltip" data-placement="left" title="Пример: ADVMAST@advmast.lv"></p><input type="email" name="email" value="<?php echo @$data['email']; ?>" placeholder="Е-майл" class="form-control input-sm chat-input">
	</p>
	<p>
		<p><label for="password"><strong>Ваш пароль<font color="red">*</font></strong></label>  <img src="../../images/qMark.png" style="width: 15px; height: 15px;" data-toggle="tooltip" data-placement="right" title="Пример: G@#gaD142$adEAS"></p> <input type="password" name="password" placeholder="Пароль" class="form-control input-sm chat-input">
	</p>
	<p> 
		<p><label for="password2"><strong>Введите Ваш пароль повторно<font color="red">*</font></strong></label></p> <input type="password" name="password2" placeholder="Повторный пароль" class="form-control input-sm chat-input"> 
	</p>
	<p>
		<p><label for="city"><strong>Город<font color="red">*</font></strong></label></p>
		<select name="city" class="form-control input-sm chat-input">
			<option>Daugavpils</option>
			<option>Rīga</option>
			<option>Liepāja</option>
		</select>
	</p>
	<p> 
		<p><label for="telephone"><strong>Введите Ваш номер телефона<font color="red">*</font></strong></label>  <img src="../../images/qMark.png" style="width: 15px; height: 15px;" data-toggle="tooltip" data-placement="right" title="Номер должен содержать 8 цифр"></p> <input type="tel" name="telephone" placeholder="Номер телефона" class="form-control input-sm chat-input"> 
	</p>
		<p><button type="submit" name="do_signup" class="btn btn-dark">Зарегестрироваться</button> </p>
	</div>
</div>
</fieldset>
</form>
<?php
	if(!empty($errors)) {
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}
?>