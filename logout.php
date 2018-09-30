<?php
require_once 'db_connection.php';

$_SESSION = [];

if(isset($_COOKIE[session_name()]))
{
	setcookie(session_name(), '', time()-3600,'/');
}

session_destroy();

header('Location: index.html');