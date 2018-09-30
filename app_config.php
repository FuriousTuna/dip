<?php
	
	define("DEBUG_MODE", true);
	
	define("SITE_ROOT", "/study/scripts/");
	define("HOST_WWW_ROOT", "C:/wamp64/www/study");
	
	define ("DATABASE_HOST", "localhost");
	define ("DATABASE_USERNAME", "scheduler");
	define ("DATABASE_PASSWORD", "123456");
	define ("DATABASE_NAME", "scheduler");
	
	function debug_print($message)
	{
		if(DEBUG_MODE)
		{
			echo $message;
		}
	}
	
	function handle_error($user_error_message, $system_error_message)
	{
		header("Location:" . SITE_ROOT . "show_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
		exit();
	}
	
	function get_web_path($file_system_path)
	{
		return str_replace($_SERVER['DOCUMENT_ROOT'], '', $file_system_path);
	}
