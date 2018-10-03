<?php
	$host = 'localhost';
	$database = 'advertservice';
	$user = 'root';
	$dbpassword = '';

	$connect = mysqli_connect($host, $user, $dbpassword, $database) 
        or die("Ошибка подключения к базе данных" . mysqli_error($connect)); 
