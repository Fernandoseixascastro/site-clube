<?php
function verificarVoucher($tabela1, $tabela2,$tabela3,$idEmpresa,$cpf, $code) {
$listarCards = listar($tabela1);
$listarConvenio = listar($tabela2);
$listarVoucher = listar($tabela3);
foreach ($listarCards as $card) {
	foreach ($listarConvenio as $convenio) {
		foreach ($listarVoucher as $voucher) {
			if ($card->id == $idEmpresa && $idEmpresa == $convenio->id && $voucher->id == $cpf && $card->titulo == $voucher->empresa && $voucher->utilizado == 'nao' && $voucher->codigo == $code) {
						?>
				<div class="container">
					<div class="row printable">
						<div class="col-3 m-auto text-center">
							<?php echo '<img class="img-parceiros" src="../'.$card->foto.'" alt="'.$card->descricaoImagem.'">';  ?><br>
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
											

									echo '<span style="padding-left: 15px;"><strong>Code: </strong></span>'.$voucher->codigo;

							?>
						</div>
					</div>
					<div class="row row-btn">
						<div class="col-6" class="col-btn-print">
							<input id="btnPrint" type=button name=imprime value="Gerar PDF" onClick="window.print();">
							<a href="carteira.php"><input class="btn btn-outline-info" style="margin-left: 15px;" type=button name=imprime value="Gerar carteirinha"></a>
						</div>
					</div>				
				</div>
	<?php
			}
			else if ($card->id == $idEmpresa && $idEmpresa == $convenio->id && $voucher->id == $cpf && $card->titulo == $voucher->empresa && $voucher->utilizado == 'sim' && $voucher->codigo == $code) {
						?>
				<div class="container">
					<div class="row printable">
						<div class="col-3 m-auto text-center">
							<?php echo '<img class="img-parceiros" src="../'.$card->foto.'" alt="'.$card->descricaoImagem.'">';  ?><br>
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

								echo '<span style="padding-left: 15px;"><strong>Cupom já utilizado </strong></span>';
							?>
						</div>
					</div>
					<div class="row row-btn">
						<div class="col-6" class="col-btn-print">
							<input id="btnPrint" type=button name=imprime value="Gerar PDF" onClick="window.print();">
							<a href="carteira.php"><input class="btn btn-outline-info" style="margin-left: 15px;" type=button name=imprime value="Gerar carteirinha"></a>
						</div>
					</div>				
				</div>
	<?php
			}
		}
	}
}return ;
}
?>