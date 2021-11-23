<?php
function gerarVoucher($tabela1, $tabela2,$tabela3,$cardID,$cpf) {
$listarCards = listar($tabela1);
$listarConvenio = listar($tabela2);
$listarVoucher = listar($tabela3);
$data = date('d/m/y');
$code = date('d').'e'.date('m').uniqid(rand());
foreach ($listarCards as $card) {
	foreach ($listarConvenio as $convenio) {
		if ($card->id == $cardID && $card->id == $convenio->id) {
					?>
			<div class="container">
				<div class="row printable">
					<div class="col-3 m-auto text-center">
						<?php echo '<img class="img-parceiros" src="'.$card->foto.'" alt="'.$card->descricaoImagem.'">';  ?><br>
						<h3><strong><?php echo $card->desconto;  ?></strong></h3>
					</div>
					<div class="col-9">
						<div id="txt-voucher">
							<span id="voucher-title" style="font-size: 35px;"><strong>Para:</strong></span> <span id="voucher-client" style="font-size: 28px;"><?php echo $_SESSION['usuarioNome']; ?></span><br>
							<p>Com este voucher você garante seu desconto exclusivo e especial de até <span style="font-size:18px;"><strong><?php echo $card->desconto;  ?></strong></span> na <?php echo $card->titulo;  ?>.</p>
							<strong>Orientações:</strong>
							<p>Com sua carteirinha do clube do Consumidor em mãos, apresente este voucher na loja credenciada para garantir sua compra de produto/serviço com o desconto referido.</p>
							<p><strong>Endereço:</strong> <?php echo $convenio->endereco.', '.$convenio->cidade;?><br>
								<strong>Telefone:</strong> <?php echo $convenio->telefone;?></p>
						</div>
						<?php
						if (count($listarVoucher) > 0 ) {
							foreach ($listarVoucher as $voucher) {			
								if ($voucher->id == $cpf && $voucher->empresa == $card->titulo && $voucher->utilizado == 'nao') {
									echo '<span style="padding-left: 15px;"><strong>Code: </strong></span>'.$voucher->codigo;
									$cont1 = 1;
									break;
								}
								else if ($voucher->id == $cpf && $voucher->empresa != $card->titulo || $voucher->utilizado == 'sim'){
									$cont2 = 1;
								}
								else if ($voucher->id != $cpf && $voucher->empresa != $card->titulo){
									$cont3 = 1;
								}
							}
							if (!empty($cont1)) {
								unset($cont1);
							}
							else if (!empty($cont2)) {
								$inserirVoucher = inserirVoucher($cpf,$code,$card->titulo,$card->id,$card->desconto,$data);
								echo '<span style="padding-left: 15px;"><strong>Code: </strong></span>'.$code;
								unset($cont2);
							}
							else if (!empty($cont3)) {
								$inserirVoucher = inserirVoucher($cpf,$code,$card->titulo,$card->id,$card->desconto,$data);
								echo '<span style="padding-left: 15px;"><strong>Code: </strong></span>'.$code;
								unset($cont3);
							}
						}else {
							$inserirVoucher = inserirVoucher($cpf,$code,$card->titulo,$card->id,$card->desconto,$data);
							echo '<span style="padding-left: 15px;"><strong>Code: </strong></span>'.$code;
						}
						?>
					</div>
				</div>
				<div class="row row-btn">
					<div class="col-6" class="col-btn-print">
						<input id="btnPrint" type=button name=imprime value="Gerar PDF" onClick="window.print();">
						<a href="user/carteira.php"><input class="btn btn-outline-info" style="margin-left: 15px;" type=button name=imprime value="Gerar carteirinha"></a>
					</div>
				</div>				
			</div>
<?php
		}
	}
}return ;
} 


?>