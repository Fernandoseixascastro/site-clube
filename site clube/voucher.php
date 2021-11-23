<?php
include_once('assets/header.php');
?>
	<title>Voucher</title>
	<meta name="description" content="Pegue seu voucher e ganhe descontos">
</head>
<body id="search">
<?php
include_once('assets/menu.php');
include_once('assets/config.php');


 


$voucher = $_POST['s'];
$data = date('m/y');
$code = date('d').'e'.date('m').uniqid(rand());
$listarCards = listar('convenios');
$listarConvenio = listar('infoconvenios');
$listarVoucher = listar('voucher');

foreach ($listarCards as $card) {
	foreach ($listarConvenio as $convenio) {
	if ($card->id == $voucher && $card->id == $convenio->id) {
		?>
		<div class="container">
			<div class="row printable">
				<div class="col-3 m-auto text-center">
					<?php echo '<img class="img-parceiros" src="'.$card->foto.'" alt="'.$card->descricaoImagem.'">';  ?><br>
					<h3><strong><?php echo $card->desconto;  ?></strong></h3>
				</div>
				<div class="col-9">
					<div id="txt-voucher">
						<span id="voucher-title" style="font-size: 35px;"><strong>Para:</strong></span> <span id="voucher-client" style="font-size: 28px;">Você associado</span><br>
						<p>Com este voucher você garante seu desconto exclusivo e especial de até <span style="font-size:18px;"><strong><?php echo $card->desconto;  ?></strong></span> na <?php echo $card->titulo;  ?>.</p>
						<strong>Orientações:</strong>
						<p>Com sua carteirinha do clube do Consumidor em mãos, apresente este voucher na loja credenciada para garantir sua compra de produto/serviço com o desconto referido.</p>
						<p><strong>Endereço:</strong> <?php echo $convenio->endereco.', '.$convenio->cidade;?><br>
								<strong>Telefone:</strong> <?php echo $convenio->telefone;?></p>
					</div>
					<?php
					if (count($listarVoucher) > 0 ) {
						foreach ($listarVoucher as $vouchers) {				
								
						}if ($vouchers->codigo != $code) {
								inserirVoucher('$cpf',$code,$card->titulo,$card->id,$card->desconto,$data);
								echo '<span style="padding-left: 15px;"><strong>Code: </strong></span>'.$code;
							} else {
								echo '<span style="padding-left: 15px;"><strong>Desculpe, houve um problema ao gerar seu codigo, tente novamente mais tarde. </strong></span>';
							}
					} else {
						foreach ($listarVoucher as $vouchers) {						
						}
						inserirVoucher('$cpf',$code,$card->titulo,$card->id,$card->desconto,$data);
						echo '<span style="padding-left: 15px;"><strong>Code: </strong></span>'.$code;
					}
					  
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




include_once('assets/footer.php');
?>