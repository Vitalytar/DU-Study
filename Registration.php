<?php
	require 'includes/contodatabase.php';
	include 'controllers/register.php';
?>
<form method="POST" action="Registration.php">
	<title>ADVMAST - Регистрация</title>

<link rel="stylesheet" href="css/style.css">
<script src='js/jquery-3.3.1.js'></script>
		<div class="navWrapper">
        	<div class="nav" id="main-nav">
            	<div id="subNavigation">
                <button class="sub-btn"><a href="Registration.php">РЕГИСТРАЦИЯ</a></button>
         		<button class="sub-btn"><a href="Login.php">ВОЙТИ</a></button>
         		<button class="sub-btn"><a href="index.php">ГЛАВНАЯ СТРАНИЦА</a></button>
         		<button class="sub-btn"><a href="Rules.php">ПРАВИЛА</a></button>
         		<button class="sub-btn"><a href="addAdv.php">ПОДАТЬ ОБЪЯВЛЕНИЕ</a></button>
         		<button class="sub-btn"><a href="About.php">РАЗРАБОТЧИК</a></button>
            	</div>
            <button id="mainButton">МЕНЮ</button>
        	</div>
        </div>
        <script src="js/index.js"></script>


<div style="margin-top: 10%; margin-left: 43%">
	<p>
		<p style="color: white;"><strong>Ваш логин<font color="red">*</font></strong></p> 
		<input type="text" name="login" value="<?php echo @$data['login']; ?>">
	</p>
	<p>
		<p style="color: white;"><strong>Ваш адрес электронной почты<font color="red">*</font></strong></p> <input type="email" name="email" value="<?php echo @$data['email']; ?>">
	</p>
	<p>
		<p style="color: white;"><strong>Ваш пароль<font color="red">*</font></strong></p> <input type="password" name="password">
	</p>

	<p> 
		<p style="color: white;"><strong>Введите Ваш пароль повторно<font color="red">*</font></strong></p> <input type="password" name="password2"> 
	</p>
	<p>
		<p style="color: white;"><strong>Город<font color="red">*</font></strong></p>
		<select name="city">
			<option>Daugavpils</option>
			<option>Rīga</option>
			<option>Liepāja</option>
		</select>
	</p>

	<p> <button type="submit" name="do_signup">Зарегестрироваться</button> </p>
</div>

</form>