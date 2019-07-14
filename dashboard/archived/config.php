<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="charity"; // Database name 

	// Connect to server and select database.
	mysql_connect($host, $username, $password); 
	mysql_select_db($db_name);

	// A function! greatest invention since wheel.
	function dbgetarr($query)
	{
		$a   = array();
		$res = mysql_query($query);
		if (!$res)
		{
			trigger_error("dbget: ".mysql_error()." in ".$query);
		}
		else
		{
			while($row = mysql_fetch_assoc($res)) $a[]=$row;
		}
		return $a;
	}
?>