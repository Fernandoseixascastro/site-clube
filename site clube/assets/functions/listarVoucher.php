<?php

function listarVoucher($tabela,$indice1Tabela,$cpf,$indice2Tabela,$utilizado) {
$listar = listar($tabela);
$cont=1;
foreach ($listar as $vouchers) {
	if ($vouchers->$indice1Tabela == $cpf && $vouchers->$indice2Tabela==$utilizado) {
		echo '
			<tr>
                <td>'.$cont.'</td>
                <td>'.$vouchers->empresa.'</td>
                <td>'.$vouchers->desconto.'</td>
                <td>'.$vouchers->codigo.'</td>
                <td>'.$vouchers->data.'</td>
                <td>
                	<form action="visualizar-voucher.php" method="post">
                		<input name="code" type="hidden" value="'.$vouchers->codigo.'">
                		<button class="btn btn-success" name="v" value="'.$vouchers->idEmpresa.'">Visualizar</button>
                	</form>
                </td>
                <td>
                	<form action="deletar-voucher.php" method="post">
                		<input name="code" type="hidden" value="'.$vouchers->codigo.'">
                		<button class="btn btn-danger" name="v" value="'.$vouchers->id.'">Excluir</button>
                	</form>
                </td>
            </tr>
		';$cont++;
	}
}

	return ;
}

?>