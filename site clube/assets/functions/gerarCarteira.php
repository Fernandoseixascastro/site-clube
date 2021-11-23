<?php



function gerarCarteira($tabela,$cpf,$nome) {

$listar = listar($tabela);
foreach ($listar as $usuario) {
	if ($usuario->cpf == $cpf) {
		echo '
		<div id="printable">
		<table id="modeloCartao">
		<img id="fotoCartão" src="'.$usuario->fotocartao.'" alt="foto do cartão">
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
		<td>'.strtoupper($usuario->cod).'<span>'.strtoupper($usuario->entidade).'</span></td>
		</tr>
		<tr>
		<td colspan=2>'.strtoupper($usuario->nome).'</td>
		
		</tr>
		</table>
		</div>
		<input id="btnPrint" type=button name=imprime value="Gerar PDF" onClick="window.print();">
		';

	}								
} return ;
}
?>