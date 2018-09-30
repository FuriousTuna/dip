<?php

require_once 'db_connection.php';

////Шаблоны для проверки введённых данных
$patterns['initials'] = '/^[А-ЯЁA-Z][а-яёa-z]{1,19}$/u';
$patterns['date'] = '/^(?:((0[1-9]|[12]\d|3[01])\.(0[13578]|1[02])\.((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\.(0[13456789]|1[012])\.((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\.02\.((19|[2-9]\d)\d{2}))|(?:29\.02\.(?:(?:1[6-9]|[2-9]\d)(?:0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/';
$patterns['phone'] = '/^(?:\+7|8)(?:\(|)\d{3}(?:\)|)\d{3}(?:\-|\s|)\d{2}(?:\-|\s|)\d{2}$/';
$patterns['email'] = '/^[\da-zA-Z]{6,10}\@[\da-zA-Z]{2,5}\.[\da-zA-Z]{2,3}$/';
$patterns['login'] = '/^(?:[A-Za-z])(?:\w|\d|[!@#$%^&*]){1,14}$/';
$patterns['password'] = '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*`\',.])[a-zA-Z0-9!@#$%^&*\',.]{6,}$/';

$errors = array();

print_r($_REQUEST);
echo '<hr>';

if(trim($_REQUEST['login']) == '')
{
	$errors[] = 'Введите логин!';
}
else
{
	if(!preg_match($patterns['login'], $_REQUEST['login']))
	{
		$errors[] = 'Введенное имя пользователя не удовлетворяет требованиям!';
	}
	
	$match_query = $mysqli->prepare("SELECT user_id FROM users WHERE user_login = ?");
	$match_query->bind_param('s', $_REQUEST['login']);
	$match_query->execute();
	$match_query->bind_result($id);
	
	while ($match_query->fetch()) {}
	if($match_query->num_rows !=0) $errors[] = "Такой логин уже существует!";
	
	$match_query->close();
	
}
if(trim($_REQUEST['pas']) == '')
{
	$errors[] = 'Введите пароль!';
}
else
{
	if(!preg_match($patterns['password'], $_REQUEST['pas']))
	{
		$errors[] = 'Введенный пароль не удовлетворяет требованиям!';
	}
	else
	{
		$pas = password_hash($_REQUEST['pas'], PASSWORD_DEFAULT);
		echo $pas;
	}
}

if(trim($_REQUEST['name']) == '')
{
	$errors[] = 'Введите имя!';
}
else
{
	if(!preg_match($patterns['initials'], $_REQUEST['name']))
	{
		$errors[] = 'Введенное имя не удовлетворяет требованиям!';
	}
}
if(trim($_REQUEST['fam']) == '')
{
	$errors[] = 'Введите фамилию!';
}

else
{
	if(!preg_match($patterns['initials'], $_REQUEST['fam']))
	{
		$errors[] = 'Введенная фамилия не удовлетворяет требованиям!';
	}
}
if(isset($_REQUEST['otc']))
{
	if(!preg_match($patterns['initials'], $_REQUEST['otc']))
	{
		$errors[] = 'Введенное отчество не удовлетворяет требованиям!';
	}
}


if(trim($_REQUEST['day']) == '')
{
	$errors[] = 'Выберите свой день рождения!';
}
if(trim($_REQUEST['month']) == '')
{
	$errors[] = 'Выберите свой месяц рождения!';
}
if(trim($_REQUEST['year']) == '')
{
	$errors[] = 'Выберите свой год рождения!';
}
$day = ($_REQUEST['day'] < 10 ? '0' . $_REQUEST['day']: $_REQUEST['day']);
$month = ($_REQUEST['month'] == "Январь" ? "01" :($_REQUEST['month'] == "Февраль" ? "02" : ($_REQUEST['month'] == "Март" ? "03" : ($_REQUEST['month'] == "Апрель" ? "04" : ($_REQUEST['month'] == "Май" ? "05" : ($_REQUEST['month'] == "Июнь" ? "06" : ($_REQUEST['month'] == "Июль" ? "07" : ($_REQUEST['month'] == "Август" ? "08" : ($_REQUEST['month'] == "Сентябрь" ? "09" : ($_REQUEST['month'] == "Октябрь" ? "10" : ($_REQUEST['month'] == "Ноябрь" ? "11" : "12" )))))))))));
$date = $day . '.' . $month . '.' . $_REQUEST['year'];
if(!preg_match($patterns['date'], $date))
{
	$errors[] = 'Неправильная дата!';
}

if(trim($_REQUEST['phone']) == '')
{
	$errors[] = 'Введите свой номер телефона!';
}
else
{
	if(!preg_match($patterns['phone'], $_REQUEST['phone']))
	{
		$errors[] = 'Введенный номер телефона не удовлетворяет требованиям!';
	}
}
if(trim($_REQUEST['mail']) == '')
{
	$errors[] = 'Введите свой Email!';
}
else
{
	if(!preg_match($patterns['email'], $_REQUEST['mail']))
	{
		$errors[] = 'Введенная почта не удовлетворяет требованиям!';
	}
	$match_query = $mysqli->prepare("SELECT user_id FROM users WHERE email = ?");
	$match_query->bind_param('s', $_REQUEST['mail']);
	$match_query->execute();
	$match_query->bind_result($id);
	
	while ($match_query->fetch()) { echo $match_query->num_rows;}
	if($match_query->num_rows !=0) $errors[] = "Такой адрес электронной почты уже используется!";
	
	$match_query->close();
}
if(trim($_REQUEST['work']) == '')
{
	$errors[] = 'Введите своё место работы!';
}

if(empty($errors))
{
	$insert_query = $mysqli->prepare("INSERT INTO users (user_login, user_password, first_name, middle_name, last_name, user_date, phone, email, work) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$insert_query->bind_param('sssssssss', $_REQUEST['login'], $pas, $_REQUEST['name'], $_REQUEST['otc'], $_REQUEST['fam'], $date, $_REQUEST['phone'], $_REQUEST['mail'], $_REQUEST['work']);
	$insert_query->execute();
	//print_r($insert_query);
	$insert_query->close();
	
}
else
{
	echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
}