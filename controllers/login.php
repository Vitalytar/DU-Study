<?php
  require '../includes/contodatabase.php';
?>
<?php
  $home_url = 'http://'.$_SERVER['HTTP_HOST'];
  $errors = array();
if(isset($_POST['do_login'])) {
        if(!isset($_COOKIE['id'])){
          
            $usrlogin = htmlentities($_POST['login']);
            $usrpassword = htmlentities(md5($_POST['password']));

          if(!empty($usrlogin) && !empty($usrpassword)) {
            $query = "SELECT * FROM `users` WHERE login = '$usrlogin' AND password = '$usrpassword'";
            $data = mysqli_query($connect, $query);

            if(mysqli_num_rows($data) == 1) {
              $row = mysqli_fetch_assoc($data);
              setcookie('id', $row['id'], time() + (60*60*24*30), '/');
              setcookie('login', $row['login'], time() + (60*60*24*30), '/');
              
              header('Location: '.$home_url);
            } else {
              header('Refresh: 3; url= "../pages/login.php"');
              exit('<div style="color: red;"><strong>Логин/пароль введен неверно! Через 3 секунды Вы будете возвращены на страницу авторизации!</strong></div>');
            }
      } // !empty
    } // id 
} // do_login