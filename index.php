<?php
  require 'includes/contodatabase.php';
?>

<form action="/index.php" method="POST">
  <meta charset="UTF-8">
  <title>Sludinājumu serviss</title>
  <link rel="stylesheet" href="css/style.css">
  <script src='js/jquery-3.3.1.js'></script>
  <style type="text/css">
    td {
      text-align: center;
      color: #fff;
      width: 20%;
    }
    th {
      text-align: center;
      padding: 15px;
      color: #fff;
      width: 20%;
      letter-spacing: 1px;
    }
  </style>  
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
    <table width="80%" style="margin-top: 7%; margin-left: 10%;">
        <tr>
            <th><a style="text-transform: uppercase; text-decoration: underline;">Компьютеры</a></th>
            <th>Мобильные телефоны</th>
            <th>Аксессуары</th>
        </tr>
        <tr>
            <td>Персональные компьютеры</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Портативные компьютеры</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Сервера</td>
            <td></td>
            <td><a href="#">Разделы</a></td>
        </tr>
    </table>
</form>
