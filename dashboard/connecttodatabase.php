<?php

define('DB_SERVER', 'localhost'); //add this to config 
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'charity');


if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
} //add up to this

?>