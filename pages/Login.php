<?php 
  require '../includes/contodatabase.php';
?>
<form action="../controllers/login.php" method="POST">
  <link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
<meta charset="UTF-8">
<title>ADVMAST - Войти</title>
<header>
 <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">ADVMAST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addAdv.php">Подать объявление</a>
      </li>
      <?php
      if(!isset($_COOKIE['id']) && !isset($_COOKIE['login'])) {
        echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Войти/Регистрация
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Войти</a>
          <a class="dropdown-item" href="registration.php">Зарегестрироваться</a>
        </div>
      </li>';
  } else {
    echo '<li class="nav-item">
        <a class="nav-link" href="profile.php">Мой профиль</a>
      </li>' ;
  }  
?>
      <li class="nav-item">
        <a class="nav-link" href="about.php">О разработчике</a>
      </li>
    </ul>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </div>
</nav>
</header>

<div style="margin-top: 10%; margin-left: 35%" class="container">
  <fieldset>
    <div class="col-md-offset-5 col-md-3">
      <legend><strong>Авторизация</strong></legend>
<p>
  <label for="login"><strong>Логин</strong></label>
  <input type="text" name="login" placeholder="Логин" class="form-control input-sm chat-input">
  </p>
  <p>
    <label for="password"><strong>Пароль</strong></label>
    <input type="password" name="password" placeholder="Пароль" class="form-control input-sm chat-input">
  </p>
  <p>
    <button type="submit" name="do_login" class="btn btn-dark">Войти</button>
  </p>
    </div>
  </fieldset>
</div>

</form>