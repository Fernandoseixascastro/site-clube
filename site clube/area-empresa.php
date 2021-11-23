<?php
require 'assets/verificarCarteira.php';
include_once('assets/header.php');
?>
	<title>Validar Carteira</title>
	<meta name="description" content="valide a carteira dos associados para conseguir descontos especiais.">
</head>
<body id="carteira">
<?php
include_once('assets/menu.php');
?>	

	<div class="container container-credenciados">

		<div class="row">
			<div class="col-12">
				<br>
				<h1 style="color: #e67e37; font-size: 2.1rem;">Validar Carteira</h1>
				<hr><br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 mb-5">
				<form id="formularioCarteira" method="post" >
					<label for="nome" style="margin-left: 5px;color: #555;margin-bottom: 5px;font-weight: bold;">Digite o nome do associado:</label><br>
					<input id="nome" type="text" class="form-control" aria-label="Entrada de dados para gerar carteira" placeholder="Ex. Ariane Mendonça Matos" name="nome" >
					<button id="searchBtnCarteita" type="submit" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search>&nbsp;</span> <span class="label-icon" ><i class="fa fa-search" onclick="verificaCadastro();"></i></span></button>
				</form>

				<?php
				$nome = mb_strtoupper($nome, 'UTF-8');
					if (!empty($nome)) {
						if ($sql->rowCount() > 0 ) {
							foreach ($sql->fetchall() as $usuario) {
								if ($usuario->nome == $nome) {
									echo '<p>Cadastro Ativo</p>';
								}
							}
						} else {
							echo "Nenhum usuário encontrado com esse nome, verifique se digitou alguma palavra errada ou se possui cadastro ativo.";
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