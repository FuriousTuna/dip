<?php
    $charset="utf8";
	require_once 'app_config.php';

	$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
		or handle_error("возникла проблема, связанная с подключением к базе данных, содержащей нужную информацию", mysqli_error($link));

	mysqli_select_db($link, DATABASE_NAME)
		or handle_error("возникла проблема с конфигурацией нашей базы данных", mysqli_error($link));

?>