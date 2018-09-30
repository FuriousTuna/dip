<?php
	/*define ("DATABASE_HOST", "localhost");
	define ("DATABASE_USERNAME", "root");
	define ("DATABASE_PASSWORD", "");
	define ("DATABASE_NAME", "sch");
	
	 $charset="utf8";

	$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
		or die("<p>Ошибка подключения к базе данных: " . mysqli_error($link) . "</p>");

	mysqli_select_db($link, DATABASE_NAME)
		or die("<p>Ошибка подключения к базе данных: " . mysqli_error($link) . "</p>");*/
	$host="localhost";
	$db_name="scheduler";
	$charset="utf8";
	$user="scheduler";
	$pass="123456";
	$dsn="mysql:host=$host;dbname=$db_name;charset=$charset";
	try
		{
			$dbh=new PDO($dsn,$user,$pass);
		}
	catch(PDOException $e)
		{
			die('Подключение не удалось' .$e->getMessage());
		}
?>
	