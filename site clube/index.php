<?php
include_once('assets/config.php');
include_once('assets/header.php');
?>
	<title>Clube do Consumidor</title>
	<meta name="description" content="Associados COOPANEST com descontos especiais">
</head>
<body id="home">
<?php

include_once('assets/menu.php');

?>	

	<div class="container-fluid container-banner">
		<div class="row">
			<div class="col-12 p-0">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    	<a href="#"><img class="d-block w-100 banner" src="assets/img/banner/Banner-black-fryday.png" alt="Banner Black Fryday"></a>
				    </div>
				   <!-- <div class="carousel-item">
				      <a href="credenciados/univida.php"><img class="d-block w-100 banner" src="assets/img/banner/banner-principal.png" alt="Coopanest Banner"></a>
				    </div> -->
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>

	<div class="container container-credenciados">

		<div class="row">
			<div class="col-12">
				<?php echo filtroPorcentagem(); ?>
				<h2>Maiores Descontos</h2>
				<hr>
			</div>
		</div>

		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','maiorDesconto','sim');
					echo $gerarCard;					
				?>
			</div>
		</div>

		<div class="row" id="classificados">
			<div class="col-12">
				<h2>Classificados</h2>
				<hr>
			</div>
		</div>

		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','categoria','classificados');
					echo $gerarCard;					
				?>
			</div>
		</div>

		<div class="row" id="saude">
			<div class="col-12">
				<h2>Saúde</h2>
				<hr>
			</div>
		</div>

		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','categoria','saúde');
					echo $gerarCard;					
				?>
			</div>
		</div>

		<div class="row" id="gastronomia">
			<div class="col-12">
				<h2>Gastronomia</h2>
				<hr>
			</div>
		</div>
		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','categoria','gastronomia');
					echo $gerarCard;					
				?>
			</div>
		</div>

		<div class="row" id="lazer">
			<div class="col-12">
				<h2>Lazer</h2>
				<hr>
			</div>
		</div>
		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','categoria','lazer');
					echo $gerarCard;					
				?>
			</div>
		</div>

	</div>

	<div class="container-fluid container-banner">
		<div class="row">
			<div class="col-12 p-0">
				<div id="carouselBannerAcademia" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <a href="credenciados/prodigio-academia.php"><img class="d-block w-100" src="assets/img/banner/banner-prodigio.png" alt="banner prodigio academia"></a>
				    </div>
				    <div class="carousel-item">
				      <a href="credenciados/prodigio-academia.php"><img class="d-block w-100" src="assets/img/banner/banner-prodigio.png" alt="banner prodigio academia"></a>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container container-credenciados">

		<div class="row" id="educacao">
			<div class="col-12">
				<h2>Educação</h2>
				<hr>
			</div>
		</div>

		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','categoria','educação');
					echo $gerarCard;					
				?>
			</div>
		</div>

		<div class="row" id="comercio">
			<div class="col-12">
				<h2>Comercio</h2>
				<hr>
			</div>
		</div>
		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','categoria','comercio');
					echo $gerarCard;					
				?>
			</div>
		</div>

		<div class="row" id="servicos">
			<div class="col-12">
				<h2>Serviços</h2>
				<hr>
			</div>
		</div>
		<div class="row row-credenciados">
			<div class="owl-carousel owl-theme">
				<?php
					$gerarCard = gerarCard('convenios','categoria','serviços');
					echo $gerarCard;					
				?>
			</div>
		</div>

	</div>

<?php
	include_once('assets/footer.php');
?>