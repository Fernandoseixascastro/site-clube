<?php

function inserirCodCliente() {
	$listar = listar('usuarios');
	$cont = 6617;
	foreach ($listar as $usuario) {
		$code =  rand(1000, 9999).' '.date('d').rand(10, 99).' '.date('m').rand(10, 99).' '.rand(1000, 9999);			
		if ($usuario->cpf == $cont) {
			set_time_limit(60);
			$pdo = conectar();
			$sql = "UPDATE usuarios SET cod=? WHERE cpf = ?";        
		    $validar = $pdo->prepare($sql);

		    $validar->execute([$code, $cont]);
		    $cont++;

		}					
	}
	echo $cont;
}
?>