<?php
require 'assets/verificarCarteira.php';
include_once('assets/header.php');
?>
	<title>Gerar Carteira</title>
	<meta name="description" content="Gere sua carteira para conseguir descontos em lojas e serviços">
</head>
<body id="carteira">
<?php
include_once('assets/menu.php');
?>	

	<div class="container container-credenciados">

		<div class="row">
			<div class="col-12">
				<br>
				<h1 style="color: #e67e37; font-size: 2.1rem;">Visualizar Carteira</h1>
				<hr><br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 mb-5">
				<form id="formularioCarteira" method="post" >
					<label for="nome" style="margin-left: 5px;color: #555;margin-bottom: 5px;font-weight: bold;">Digite seu nome:</label><br>
					<input id="nome" type="text" class="form-control" aria-label="Entrada de dados para gerar carteira" placeholder="Ex. Ariane Mendonça Matos" name="nome" >
					<button id="searchBtnCarteita" type="submit" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search>&nbsp;</span> <span class="label-icon" ><i class="fa fa-search" onclick="verificaCadastro();"></i></span></button>
				</form>

				<?php
					if (!empty($nome)) {
						$nome = mb_strtoupper($nome, 'UTF-8');
						foreach ($sql->fetchall() as $usuario) {
							if ($usuario->nome == $nome) {
								echo '<div id="printable">
									<table id="modeloCartao">
										<img id="fotoCartão" src="'.$usuario->fotocartao.'" alt="foto do cartão">
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr>
										<td id="tdFuncao">'.$usuario->cod.'</td>
										</tr>
										<tr>
										<td colspan=2>'.$usuario->nome.'</td>
										</tr>
									</table>
									</div>
									<input id="btnPrint" type=button name=imprime value="Gerar PDF" onClick="window.print();">';
							} else {
								echo "Nenhum cliente encontrado com esse nome, verificar se não digitou alguma letra errada";
							}								
						}
					}
				?>

			</div>
			<div class="col-lg-6 col-md-12">
				<!--<img id="img-pag-carteira" src="assets/img/mulher-segurando-cartao.png" alt="mulher segurando cartão do clube dos associados"> -->
			</div>
		</div>
	</div>

<?php
	include_once('assets/footer.php');
?>