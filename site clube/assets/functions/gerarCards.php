<?php

function gerarCard($tabela,$indiceTabela,$categoria) {
$listar = listar($tabela);

foreach ($listar as $cards) {
	if ($cards->$indiceTabela == $categoria) {
		echo '
		<div class="item">
			<div class="card" style="width: 16rem;">
			  	<img class="img-parceiros" src="'.$cards->foto.'" alt="'.$cards->descricaoImagem.'">
			  	<div class="card-body">
			   	<h5 class="card-title">'.$cards->titulo.'</h5>
			   	<p class="card-text">'.$cards->descricao.'</p>
			   	<div style="display:flex;">
				   	<form class="w-50" action="voucher.php" method="post">
				   	<button class="btn btn-card" name="s" value="'.$cards->id.'">Quero meu <br>desconto</button>
					</form>
				   	<form class="w-50" action="credenciados.php" method="post">
				   	<button class="btn btn-info btn-cards" name="s" value="'.$cards->id.'">Saiba<br>Mais</button>
				   	</form>
			    </div>
				</div>
			</div>
		</div>
		';
	}
}

	return ;
}
?>