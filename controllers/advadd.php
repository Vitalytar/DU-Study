<?php
	include $_SERVER['DOCUMENT_ROOT']."/includes/contodatabase.php";
?>
<?php
	$errors = array();
if(isset($_POST['send_adv'])) {
	

	$uploaddir = '../uploads';
	$uploadfile = $uploaddir.basename($_FILES['photo']['name']);

	if(move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
		echo 'Файл корректен и был успешно загружен!\n';
	} else {
		echo 'ОШИБКА!';
	}
}	
?>