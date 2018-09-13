<?php include_once('contodatabase.php'); ?>

<?php 
function registrationCorrect() {
	if ($_POST['login'] == "") return false; //не пусто ли поле логина 	
	if ($_POST['password'] == "") return false; //не пусто ли поле пароля
	if ($_POST['password2'] == "") return false; //не пусто ли поле подтверждения пароля
	if ($_POST['email'] == "") return false; //не пусто ли поле e-mail
	if (!preg_match('/^([a-z0-9])(\w|[.]|-|_)+([a-z0-9])@([a-z0-9])([a-z0-9.-]*)([a-z0-9])([.]{1})([a-z]{2,4})$/is', $_POST['email'])) return false; //соответствует ли поле e-mail регулярному выражению
	if (!preg_match('/^([a-zA-Z0-9])(\w|-|_)+([a-z0-9])$/is', $_POST['login'])) return false; // соответствует ли логин регулярному выражению
	if (strlen($_POST['password']) < 5) return false; //не меньше ли 5 символов длина пароля
 	if ($_POST['password'] != $_POST['password2']) return false; //равен ли пароль его подтверждению
	$login = $_POST['login'];
	$rez = mysqli_query($connect, "SELECT * FROM users WHERE login=$login");
	if (@mysqli_num_rows($rez) != 0) return false; // проверка на существование в БД такого же логина
	return true; //если выполнение функции дошло до этого места, возвращаем true 
}
?>