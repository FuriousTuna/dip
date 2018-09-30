<?php

require_once 'app_config_local.php';

$mysqli = new mysqli(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME);
$mysqli->set_charset('utf8');

//echo '<pre>';
//print_r($mysqli);
//echo '</pre>';

if (mysqli_connect_errno()) {
	printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	exit();
}