<?php
  require '../includes/contodatabase.php';

	$registration_date = date('Y-m-d');
	$home_url = 'http://'.$_SERVER['HTTP_HOST'];
	$errors = array(); 
	if(isset($_POST['do_signup']))
	{
		if(trim($_POST['login']) == '')  { // trim убирает лишние пробелы
			$errors[] = 'Ошибка при вводе логина!';
		}

		if (strlen($_POST['login']) < 3 || strlen($data['login']) > 16) {
			$errors[] = 'Логин должен содержать не менее 3-х символов и не более 16!';
		}

		if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])) { 
        	$errors[] = "Логин может состоять только из букв английского алфавита и цифр"; 
    	}

		if(trim($_POST['password']) == '') {
			$errors[] = 'Ошибка при вводе пароля!';
		}

		if(strlen($_POST['password']) < 6 || $data['password'] > 32) {
			$errors[] = 'Пароль должен содержать не менее 6 символов!';
		}

		if(trim($_POST['telephone']) == '') {
			$errors[] = 'Вы не ввели номер телефона!';
		}
		if(strlen($_POST['telephone']) != 8) {
			$errors[] = 'Номер телефона должен содержать 8 цифр!';
		}

		if(trim($_POST['email']) == '' || strlen($data['email']) > 40)
		{
			$errors[] = 'Ошибка при вводе электронной почты!';
		}

		if($_POST['password'] == '')
		{
			$errors[] = 'Ошибка при вводе пароля!';
		}

		if($_POST['password2'] != $_POST['password'])
		{
			$errors[] = 'Введенные пароли не совпадают!';
		}
		$login = $_POST['login'];
		$email = $_POST['email'];
		$query = "SELECT * FROM users WHERE login = '$login' OR email = '$email'";
		$result = mysqli_query($connect, $query) or die("ERROR");
		if(mysqli_num_rows($result) >= 1) {
			$errors[] = 'Данный пользователь уже существует!';
			mysqli_close($connect);
		} else {
			unset($login);
			unset($email);
			unset($query);
			unset($result);
		}
		
	} // проверки на правльность заполнения полей, что бы не были пустые    	
    	if(empty($errors)) {
    // экранирования символов для mysql
    		$login = htmlentities($_POST['login']);
    		$password = htmlentities($_POST['password']);
    		$email = htmlentities($_POST['email']);
    		$city = $_POST['city'];
    		$telephone = htmlentities($_POST['telephone']);

    		$query = "INSERT INTO users VALUES(NULL, '$login',md5('$password'), '$email', '$registration_date', '$city', '$telephone')"; // id присваевается каждому пользователю автоматически
    		$result = mysqli_query($connect, $query) or die("ОШИБКА");
    		mysqli_close($connect);
        	header('Location: ../pages/login.php');    	 	
   } else {
   	header('Refresh: 3; url="http://studdarbs/pages/registration.php"'); // Задержка 3 секунды перед тем, как пользователь будет возвращен на страницу регистрации
   	exit(array_shift($errors).' <strong>Через 3 секунды вы будете возвращены на страницу регистрации!</strong>');
   }
