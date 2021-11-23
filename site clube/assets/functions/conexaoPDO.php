<?php

function conectar() {
	/* Para testes locais
	$dsn = "mysql:dbname=clube;host=localhost;charset=utf8";
	$dbuser = "root";
	$dbpass = "";*/

	
	$dsn = "mysql:dbname=epiz_27022070_clube;host=sql104.epizy.com;charset=utf8";
	$dbuser = "epiz_27022070";
	$dbpass = "Nth1Zrb83Cb";

	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);


	return $pdo;
}




?>