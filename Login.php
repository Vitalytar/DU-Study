<?php 
  require 'includes/contodatabase.php';
  include 'controllers/login.php';
?>

<form action="login.php" method="POST">
  <title>ADVMAST - Войти</title>
  
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Войти</title>
	<script src="jquery-3.3.1.min.js"></script>
  <header>
    <div class="wrapper">
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
    </header>
<div style="margin-top: 10%; margin-left: 43%">
  <p>
    <p style="color: white;"><strong>Логин</strong></p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>">
  </p>
  <p>
    <p style="color: white;"><strong>Пароль</strong></p>
    <input type="password" name="password">
  </p>
  <p>
    <button type="submit" name="do_login">Войти</button>
  </p>
</div>
	
</form>