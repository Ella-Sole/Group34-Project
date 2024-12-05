<?php

$db_host = 'localhost';
$db_name = 'retro_xchange_new';
$username = 'root';
$password = '';

try {
	$db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password);
	echo("Successfully connected to the  retroX database.<br>");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
	echo("Failed to connect to the retroX database.<br>");
	echo($ex->getMessage());
	exit;
}
?>