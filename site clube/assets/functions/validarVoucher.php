<?php

function validarVoucher($tabela, $valor, $campo, $code) {
	$pdo = conectar();
	$sql = "UPDATE $tabela SET utilizado=? WHERE $campo = ?";        
    $validar = $pdo->prepare($sql);

    $validar->execute([$valor, $code]);


	return $validar;
}

?>