<?php
$home_url = 'http://'.$_SERVER['HTTP_HOST'];
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
              
              header('Location: '.$home_url);
            } else {
              echo '<div style="color: red;">Логин/пароль введен неверно!</div>';
            }
      }
    } 
  }
  if(isset($_COOKIE['id'])) {
    header('Location: http://studdarbs/index.php');
  }