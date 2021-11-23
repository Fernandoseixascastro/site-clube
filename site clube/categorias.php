<?php
include_once('assets/header.php');
?>
	<title>Busca</title>
	<meta name="description" content="Encontrou o que buscava?">
</head>
<body id="categorias">
<?php
include_once('assets/menu.php');
include_once('assets/config.php');



$categoria = $_GET['categoria'];

?>

<div class="container container-credenciados">
	<div class="row">
		<div class="col-12">
			<?php echo filtroPorcentagem(); ?>
			<h2><?php echo ucfirst($categoria); ?></h2>
			<hr>
		</div>
	</div>
	<div class="row row-credenciados">
		<?php
		$listar = listar('convenios');
		$contCategoria = 0;
		if (count($listar) > 0 ) {
			foreach ($listar as $cards) {
				if ($cards->categoria == $categoria || $cards->subCategoria == $categoria) {
					echo '
					<div class="col-lg-4 col-md-6 col-sm-12 credenciado">

						<div class="card" style="width: 16rem;">
						  	<img class="img-parceiros" src="'.$cards->foto.'" alt="'.$cards->descricaoImagem.'">
						  	<div class="card-body">
						   	<h5 class="card-title">'.$cards->titulo.'</h5>
						   	<p class="card-text">'.$cards->descricao.'</p>
						   	<div style="display:flex;">
							   	<form class="w-50" action="voucher.php" method="get">
							   	<button class="btn btn-card" name="s" value="'.$cards->id.'">Quero meu <br>desconto</button>
								</form>
							   	<form class="w-50" action="credenciados.php" method="get">
							   	<button class="btn btn-info" name="s" value="'.$cards->id.'">Saiba<br>Mais</button>
							   	</form>
						    </div>
							</div>
						</div>
					</div>
					';
				} else {
					$contCategoria +=1;
					//echo $contCategoria.'<br>';
					//echo $cards->categoria.'<br>';
				}
			} if ($contCategoria == count($listar)) {
				echo "";
					echo '
						<div class="container container-produtos">
								<div class="row" id="educacao">
									<div class="col-12">
										<h4 style=" font-weight: bold; font-size: 2.1rem; margin-bottom: 100px;">Infelizmente não foi encontrado nenhum produto nessa categoria =(</h4>
									</div>
								</div>
							</div>
							';
			}
		}
	?>
	</div>
</div>



	<?php
	

include_once('assets/footer.php')
?>