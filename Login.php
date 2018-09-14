<?php 
  require 'includes/contodatabase.php'; // скрипт подключения к БД 

        $errors = array();
        if(!isset($_COOKIE['id'])){
          if(isset($_POST['do_login'])) {
            $usrlogin = htmlentities(mysqli_real_escape_string($connect, $_POST['login']));
            $usrpassword = htmlentities(mysqli_real_escape_string($connect, md5($_POST['password'])));

          if(!empty($usrlogin) && !empty($usrpassword)) {
            $query = "SELECT `id`, `login`, `password` FROM `users` WHERE login = '$usrlogin' AND password = '$usrpassword'";
            $data = mysqli_query($connect, $query);
            if(mysqli_num_rows($data) == 1) {
              $row = mysqli_fetch_assoc($data);
              setcookie('id', $row['id'], time() + (60*60*24*30));
              setcookie('login', $row['login'], time() + (60*60*24*30));
              $home_url = 'http://'.$_SERVER['HTTP_HOST'];
              header('Location: '.$home_url);
            } else {
              echo '<div style="color: red;">Логин/пароль введен неверно!</div>';
            }
      }
    } 
        }


?>

<form action="/Login.php" method="POST">
  <title>Войти</title>
  
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