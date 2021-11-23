<?php
function title($tabela,$indiceTabela,$id) {
$listar = listar($tabela);

foreach ($listar as $credenciados) {
	if ($credenciados->$indiceTabela == $id) {
		echo $credenciados->nome;
	}
}

	return ;
}

function metaDescription($tabela,$indiceTabela,$id) {
$listar = listar($tabela);

foreach ($listar as $credenciados) {
	if ($credenciados->$indiceTabela == $id) {
		echo $credenciados->metaDescription;
	}
}

	return ;
}

function listarCredenciados($tabela,$indiceTabela,$id) {
$listar = listar($tabela);
foreach ($listar as $credenciados) {
	if ($credenciados->$indiceTabela == $id) {
		echo '
			<div class="row">
		<div class="col-12">
			<h1 class="h1-credenciados"> '.$credenciados->nome.'</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-12">
				<img class="img-credenciados" src="'.SITE.'/'.$credenciados->foto.'" alt="'.$credenciados->altImagem.'">
		</div>
		<div class="col-lg-6 col-md-12">
			<h4 class="h4-credenciados">Sobre</h4>
			<p>
				'.$credenciados->textoDescricao.'
			</p>

			<p><strong>Endereço:</strong> '.$credenciados->endereco.'</p>

			<p><strong>Cidade:</strong> '.$credenciados->cidade.'</p>

			<p><strong>Telefone:</strong> '.$credenciados->telefone.'</p>

			<form class="w-50" action="voucher.php" method="post">
				<button class="btn btn-card btn-page-convenio" name="s" value="'.$credenciados->id.'"> Quero meu <br>desconto</button>
			</form>
		</div>
	</div>
		';
	}
}

	return ;
}

?>