<?php
    // соединяем БД с PHP
	$connect = mysqli_connect('127.0.0.1','root','','products_db'); // сервер, имя пользователя, пароль, название БД
	if($connect == false)
	{
		echo 'Не удалось подключиться к БД<br>';
		echo mysqli_connect_error();
		exit();
	}
	else
	{
		echo 'БД подключена и готова к работе!<br>';
	}
?>

