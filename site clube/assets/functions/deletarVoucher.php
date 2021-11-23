<?php

function deletarVoucher($tabela, $campo, $info) {
	$pdo = conectar();
	$sql = "DELETE FROM $tabela WHERE $campo = ?";        
    $deletar = $pdo->prepare($sql);

    $response = $deletar->execute(array($info)); 

	return $response;
}

?>