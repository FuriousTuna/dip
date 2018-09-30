<?php

require_once 'db_connection.php';

$match_query = $mysqli->prepare("SELECT user_login, user_password FROM users WHERE user_login = ?");
$match_query->bind_param('s', $_REQUEST['login']);
$match_query->execute();
$match_query->bind_result($login,$pass);
//echo $_REQUEST['login'];

while ($match_query->fetch()) {
	//echo $login . ' ' . $pass;
}
if($match_query->num_rows ==0)
{
	$errors[] = "Пользователя с таким логином не существует!";
}
else
{
	if(!password_verify($_REQUEST['pas'], $pass))
	{
		$errors[] = "Неправильный пароль!";
	}
}

$match_query->close();

if (empty($errors))
{
	header("Location: kab.html");
}
else
{
	echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
}