<?php
	require '../includes/contodatabase.php';
?>
<?php
	include '../includes/header.php';
?>
<form method="POST">
	<?php
		$usrname = $_COOKIE['login'];
		$query = "SELECT * FROM users WHERE login = '$usrname'";
		echo '<div style="margin-top: 5%; margin-left: 40%;">';
		$result = mysqli_query($connect, $query) or die ("ERROR:".mysqli_error($connect));
		
			$row = mysqli_fetch_assoc($result);
			echo 'Имя пользователя: '.$row['login'].'<br/>';
			echo 'E-mail: '.$row['email'].'<br/>';
			echo 'Дата регистрации: '.$row['registration_date'].'<br/>';
			echo 'Город: '.$row['city'].'<br/>';
			echo 'Номер телефона: '.$row['telephoneNumber'].'<br/>';
		
		echo '</div>';
		unset($row);
	?>
</form>