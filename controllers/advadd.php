<?php
	require '../includes/contodatabase.php';

	$errors = array();
	
	if($_POST['advtext'] == '') {
		$errors[] = 'Введите описание!';
	}
	if($_POST['state'] == 'Состояние') {
		$errors[] = 'Вы не выбрали состояние!';
	}
	if($_POST['thing'] == '') {
		$errors[] = 'Не введено название!';
	}
	if(empty($errors)) {
		$addTime = date('Y-m-d');
		$thing = htmlentities($_POST['thing']);
		$advtext = htmlentities($_POST['advtext']);
		$state = htmlentities($_POST['state']);
		$price = htmlentities($_POST['price']);
		$query = "INSERT INTO advertisements VALUES(NULL, '$thing', '$state', '$advtext', '$price', '$addTime')";
		$result = mysqli_query($connect, $query) or die(mysqli_error($connect)." AGA SYKA");
		mysqli_close($connect);
		header('Location: ../index.php');
	}
?>