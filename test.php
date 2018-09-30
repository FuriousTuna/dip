<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 04.07.2018
 * Time: 23:51
 */

require_once 'app_config.php';

$mysqli = new mysqli(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME);

$query = $mysqli->prepare("SELECT * FROM users WHERE user_id = 1");
$query->execute();
//$query->bind_param('ssssssss',$login,$password,$first_name,$middle_name,$last_name,$phone,$email,$work);