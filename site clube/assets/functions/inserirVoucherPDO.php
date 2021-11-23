<?php

function inserirVoucher($cpf,$code,$titulo,$idEmpresa,$desconto,$data) {
	$pdo = conectar();
	$data = ['id' => $cpf,'codigo' => $code,'empresa' => $titulo,'idEmpresa'=> $idEmpresa,'desconto' => $desconto,'utilizado' => 'nao','data' => $data,];
	$sql = "INSERT INTO voucher (id, codigo, empresa,idEmpresa, desconto,utilizado, data) VALUES (:id,:codigo,:empresa,:idEmpresa,:desconto,:utilizado,:data)";
	$inserir = $pdo->prepare($sql);
	$inserir->execute($data);

	return ;
}

?>