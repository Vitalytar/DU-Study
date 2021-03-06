<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <title>ADVMAST - Главная</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">ADVMAST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/addAdv.php">Подать объявление</a>
      </li>
      <?php
      if(!isset($_COOKIE['id']) && !isset($_COOKIE['login'])) {
        echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Войти/Регистрация
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pages/login.php">Войти</a>
          <a class="dropdown-item" href="pages/registration.php">Зарегестрироваться</a>
        </div>
      </li>';
  } else {
    echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Мой профиль
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pages/profile.php">Мой профиль</a>
          <a class="dropdown-item" href="../includes/logout.php">Выйти</a>
        </div>
      </li>' ;
  }      
?>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top: 20%; margin-left: 23%; font-size: 32">
  <div class="row">
    <div class="col-sm" >
      <a href="pages/category/usedAdvPage.php"> <strong>USED PRICES</strong> </a>
    </div>
    <div class="col-sm">
      <a href="pages/category/newAdvPage.php"> <strong>NEW PRICES</strong> </a>
    </div>
  </div>
</div>

</body>
</html>

