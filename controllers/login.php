<?php
  require '../includes/contodatabase.php';
?>
<?php
$home_url = $_SERVER['HTTP_HOST'];
if(isset($_POST['do_login'])) {
      if(!isset($_COOKIE['id']) && !isset($_COOKIE['login'])){
          if(!empty($_POST['login']) && !empty($_POST['password'])) {
            $usrlogin = htmlentities($_POST['login']); // экранирование символов для БД
            $usrpassword = htmlentities(md5($_POST['password']));
            $query = "SELECT login, password, id FROM users WHERE login = '$usrlogin' AND password = '$usrpassword'";
            $data = mysqli_query($connect, $query);

            if(mysqli_num_rows($data) == 1) {
              $row = mysqli_fetch_assoc($data);
              setcookie('id', $row['id'], time() + (60*60*24*30), '/'); // установка куков
              setcookie('login', $row['login'], time() + (60*60*24*30), '/');
              header('Refresh: 1; url="http://advmast.lv/"');
            } else {
              header('Refresh: 3; url= "../pages/login.php"');
              exit('<div style="color: red;"><strong>Логин/пароль введен неверно! Через 3 секунды Вы будете возвращены на страницу авторизации!</strong></div>');
            } // else
          } // !empty
      } // id 
} // do_login