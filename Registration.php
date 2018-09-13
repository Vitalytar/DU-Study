<?php
	require 'includes/contodatabase.php';
?>

<?php	
	$data = $_POST;
	$registration_date = date('Y-m-d');

	if( isset($data['do_signup']) )
	{
		$errors = array(); 
		if(trim($data['login']) == '')  { // trim убирает лишние пробелы
			$errors[] = 'Ошибка при вводе логина!';
		}

		if (strlen($data['login']) < 3 || strlen($data['login']) > 16) {
			$errors[] = 'Логин должен содержать не менее 3-х символов и не более 16!';
		}

		if(!preg_match("/^[a-zA-Z0-9]+$/",$data['login'])) { 
        	$errors[] = "Логин может состоять только из букв английского алфавита и цифр"; 
    	}

		if(trim($data['password']) == '') {
			$errors[] = 'Ошибка при вводе пароля!';
		}

		if(strlen($data['password']) < 6 || $data['password'] > 32) {
			$errors[] = 'Пароль должен содержать не менее 6 символов!';
		}

		if(trim($data['email']) == '' || strlen($data['email']) > 40)
		{
			$errors[] = 'Ошибка при вводе электронной почты!';
		}

		if($data['password'] == '')
		{
			$errors[] = 'Ошибка при вводе пароля!';
		}

		if($data['password2'] != $data['password'])
		{
			$errors[] = 'Введенные пароли не совпадают!';
		}		
	} // проверки на правльность заполнения полей, что бы не были пустые

	if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])){
      
    // экранирования символов для mysql
    $login = htmlentities(mysqli_real_escape_string($connect, $_POST['login']));
    $password = htmlentities(mysqli_real_escape_string($connect, $_POST['password']));
    $email = htmlentities(mysqli_real_escape_string($connect, $_POST['email']));
     
    // создание строки запроса
    if(empty($errors)) {
    	$query = "INSERT INTO users VALUES(NULL, '$login',md5('$password'), '$email', '$registration_date')"; // id присваевается каждому пользователю автоматически
    	$result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($connect)); 
        echo '<div style="color: white;"><strong>Теперь вы можете <a href="Login.php"><u>авторизоваться</u></a></strong></div>';
   }
   else {
   	echo '<div style="color: red;">'.array_shift($errors).'</div>';
   }
    mysqli_close($connect);  
}
?>
<form method="POST" action="Registration.php">
	<title>Регистрация</title>

<link rel="stylesheet" href="css/style.css">
<script src='js/jquery-3.3.1.js'></script>
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


<div style="margin-top: 10%; margin-left: 43%">
	<p>
		<p style="color: white;"><strong>Ваш логин</strong></p> <input type="text" name="login" value="<?php echo @$data['login']; ?>">
	</p>
	<p>
		<p style="color: white;"><strong>Ваш адрес электронной почты</strong></p> <input type="email" name="email" value="<?php echo @$data['email']; ?>">
	</p>
	<p>
		<p style="color: white;"><strong>Ваш пароль</strong></p> <input type="password" name="password">
	</p>

	<p> 
		<p style="color: white;"><strong>Введите Ваш пароль повторно</strong></p> <input type="password" name="password2"> 
	</p>

	<p> <button type="submit" name="do_signup">Зарегестрироваться</button> </p>
</div>

</form>