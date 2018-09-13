<?php 
  require 'includes/contodatabase.php'; // скрипт подключения к БД 
?>

<?php
    $errors = array();

    if($_POST['login'] != '' && $_POST['password'] != '') {
      $login = $_POST['login'];
      $password = $_POST['password'];

      $query = mysqli_query("SELECT * FROM users WHERE login = $login"); // запрос на строку из БД с логином, который ввел пользователь
      if(mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        if(md5($password) == $row['password']) {
          setcookie('login', $row['login'], time() + 50000);
          setcookie('password', md5($row['login'].$row['password']), time() + 50000);
          $_SESSION['id'] = $row['id'];
          $id = $_SESSION['id'];
          lastAct($id);
          return $error;
        }
        else {
          $error[] = "Неверный пароль";
          return $error;
        } // если не совпали пароли
      }
      else {
        $error[] = "Неверный логин и/или пароль!";
      } // если логина не найдено в БД
    }
?>

<form action="/Login.php" method="POST">
  <title>Войти</title>
  
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Войти</title>
	<script src="jquery-3.3.1.min.js"></script>
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