<?php
require 'assets/config.php';
include_once('assets/header.php');
?>
	<title>Busca</title>
	<meta name="description" content="Encontrou o que buscava?">
</head>
<body id="search">
<?php
include_once('assets/menu.php');


$desconto = $_GET['s'];
?>
	<div class="container container-credenciados">
		<div class="row">
			<div class="col-12">
				<?php echo filtroPorcentagem(); ?>
				<h2>Desconto de <?php echo $desconto; ?></h2>
				<hr>
			</div>
		</div>
		<div class="row row-credenciados">
			<?php
				$gerarPesquisa = gerarPesquisa('convenios','desconto',$desconto);
				echo $gerarPesquisa;					
			?>
		</div>
	</div><?php

include_once('assets/footer.php')
?>