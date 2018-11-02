<?php
  include '../../includes/headerCateg.php';
  include '../../includes/contodatabase.php';
?>
<form method="GET">
	<style type="text/css">
		div {
			text-overflow: ellipsis;
			width: 99%;
			overflow: hidden;
			word-wrap: break-word;
			text-align: center;
			margin-left: 0.5%;
		}
	</style>
	<?php
		if(!empty($_GET['id'])) {
	?>
	<div style="margin-top: 5%;">
	<?php
			$advId = htmlentities($_GET['id']);
			$advOwner = htmlentities($_COOKIE['id']);
			$queryAdv = "SELECT * FROM advertisements WHERE id = '$advId'";
			$dataAdv = mysqli_query($connect, $queryAdv) or die("ERROR");

			$queryOwn = "SELECT * FROM users WHERE id = '$advOwner'";
			$dataOwn = mysqli_query($connect, $queryOwn);

			if(mysqli_num_rows($dataAdv) == 1 && mysqli_num_rows($dataOwn) == 1) {
				$rowAdv = mysqli_fetch_assoc($dataAdv);
				$rowOwn = mysqli_fetch_assoc($dataOwn);
				echo '<div><h1>Состояние: '.$rowAdv['state'].'</h1></div>';
				echo '<hr/>';
				echo '<div class="border border-primary" style="text-align: center;"><br/><strong>Описание:</strong> '.$rowAdv['description'];
				echo '<br/><strong>Цена:</strong> '.$rowAdv['price'];
				echo '<br/><strong>Опубликовал:</strong> '.$rowOwn['login'];
				echo '<br/><strong>E-mail:</strong> '.$rowOwn['email'];
				echo '<br/><strong>Номер:</strong> '.$rowOwn['telephoneNumber'];
				echo '<br/><strong>Добавлено:</strong> '.$rowAdv['addTime'].'</div>';
			}

		} else {
			echo 'Упс! Произошла ошибка!';
		}
	?>
	</div>
	
</form>

