<?php

function listarVoucherShop($tabela1,$tabela2,$tabela3,$indice1Tabela,$cpf,$indice2Tabela,$utilizado) {
$listarVoucher = listar($tabela1);
$listarEmpresa = listar($tabela2);
$listarUsuarios = listar($tabela3);
$cont=1;
foreach ($listarUsuarios as $usuario) {
    foreach ($listarEmpresa as $empresa) {
        foreach ($listarVoucher as $vouchers) {
        	if ($vouchers->$indice1Tabela == $empresa->id && $vouchers->$indice2Tabela==$utilizado && $empresa->cnpj==$cpf && $usuario->cpf==$vouchers->id) {
        		echo '
        			<tr>
                        <td>'.$cont.'</td>
                        <td>'.$usuario->nome.'</td>
                        <td>'.$vouchers->empresa.'</td>
                        <td>'.$vouchers->desconto.'</td>
                        <td>'.$vouchers->codigo.'</td>
                        <td>'.$vouchers->data.'</td>';
                if ($vouchers->$indice2Tabela=='nao') {
                    echo '
                        <td>
                            <form action="validar-voucher.php" method="post">
                                <button class="btn btn-success" name="code" value="'.$vouchers->codigo.'">Validar</button>
                            </form>
                        </td>';
                }
                    
                   echo '</tr>';
        		$cont++;
        	}
        }
    }
}
	return ;
}

?>