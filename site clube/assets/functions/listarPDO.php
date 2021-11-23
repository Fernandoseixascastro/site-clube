<?php

function listar($tabela) {
	$pdo = conectar();

	$sql = "SELECT * FROM $tabela";
	$listar = $pdo->prepare($sql);
	$listar->execute();

	return $listar->fetchAll();
}

?>