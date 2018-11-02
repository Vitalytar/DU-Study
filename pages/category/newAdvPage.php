<!DOCTYPE html>
<html>
<head>
	<title>ADVMAST - Новые вещи</title>
	<meta charset="utf-8">
</head>
<body>
<header>
<?php
	include '../../includes/headerCateg.php';
?>
</header>
  <form action="TEST_ID.php" method="POST">

    <?php

        $query = "SELECT * FROM advertisements";
        $result = mysqli_query($connect, $query) or die('ERROR');
        echo '<div class="card-deck">';

        arrray: while($row = mysqli_fetch_array($result)) {
          
          echo '<div class="card text-white bg-dark mb-3" style="margin-top: 5%; margin-left: 2%; margin-right: 2%;">
                <img class="card-img-top" src="//placehold.it/286x180">
                <div class="card-body">
                <h5 class="card-title">'.$row['thing'].'</h5>
                <p class="card-text">Цена: '.$row['price'].'€</p>
                <p class="card-text" maxlength="30">Описание: '.mb_substr($row['description'], 0, 30, 'UTF-8').'</p>
                <a href="advertisement.php?id='.$row['id'].'" class="btn btn-primary" name="genAdv">Смотреть</a>
                </div>
                <div class="card-footer text-muted">Добавлено: '.$row['addTime'].'</div>
                </div>'; // mb_substr - ограничение кол-ва выводимых символов 
        } 
        echo '</div>'; 
    ?>
  </form>
</body>
</html>

