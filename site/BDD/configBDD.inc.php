<?php
	define('DB_HOST', 'mysql-luca-benezit.alwaysdata.net');
	define('DB_PORT', '3306');
	define('DB_DATABASE', 'luca-benezit_projet');
	define('DB_USERNAME', '144258');
	define('DB_PASSWORD', '@Lekilleur981998');
	try {
		$PDO_SQL = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$PDO_SQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$PDO_SQL->exec("SET NAMES 'utf8'");
	} catch(Exception $e) {
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		exit();
	}
?>