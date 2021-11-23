<?php
include_once('assets/header.php');
?>
	<title>Busca</title>
	<meta name="description" content="Encontrou o que buscava?">
</head>
<body id="search">
<?php
include_once('assets/menu.php');
include_once('assets/config.php');


if ( isset($_GET['s']) && !empty($_GET['s']) ) {
	$pesquisa = $_GET['s'];


	$comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');

	$semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');

	$palavra = str_replace($comAcentos, $semAcentos, $pesquisa);
	$categoria = strtolower($palavra);
	$categoria =  substr($categoria,0, 4);


	$tagsSaude = 'saud,saúd,cons,exam';
	$tagsGastronomia = 'rest,comi,gast';
	$tagsLazer = 'turi,laze,desc,conf';
	$tagsEducacao = 'cole,apre,esco,educ,curs,ling,ingl,espa,idio';
	$tagsComercio = 'vend,come,comp';
	$tagsServicos = 'serv,ajud,auxi,refo,segu';
	$tagsClass = 'imov,casa,pred,apar,terr,clas';
	$categorias = array ('saúde','gastronomia','lazer','educação','comercio','serviços', 'classificados');
	$titulos = array ('Saúde','Gastronomia','Lazer','Educação','Comercio','Serviços', 'Classificados');

	$pattern = '/' . $categoria . '/';
	if (preg_match($pattern, $tagsSaude)) {
		$pesquisa = $categorias[0];
		$titulo = $titulos[0];
	}
	if (preg_match($pattern, $tagsGastronomia)) {
		$pesquisa = $categorias[1];
		$titulo = $titulos[1];
	}
	if (preg_match($pattern, $tagsLazer)) {
		$pesquisa = $categorias[2];
		$titulo = $titulos[2];
	}
	if (preg_match($pattern, $tagsEducacao)) {
		$pesquisa = $categorias[3];
		$titulo = $titulos[3];
	}
	if (preg_match($pattern, $tagsComercio)) {
		$pesquisa = $categorias[4];
		$titulo = $titulos[4];
	}
	if (preg_match($pattern, $tagsServicos)) {
		$pesquisa = $categorias[5];
		$titulo = $titulos[5];
	}
	if (preg_match($pattern, $tagsClass)) {
		$pesquisa = $categorias[6];
		$titulo = $titulos[6];
	}

	?>
		<div class="container container-credenciados">
			<div class="row">
				<div class="col-12">
					<?php echo filtroPorcentagem(); ?>
					<h2><?php echo $titulo; ?></h2>
					<hr>
				</div>
			</div>
			<div class="row row-credenciados">
					<?php
						$gerarPesquisa = gerarPesquisa('convenios','categoria',$pesquisa);
						echo $gerarPesquisa;					
					?>
			</div>
		</div><?php
		if (!preg_match($pattern, $tagsSaude) && !preg_match($pattern, $tagsGastronomia) && !preg_match($pattern, $tagsLazer) && !preg_match($pattern, $tagsEducacao) && !preg_match($pattern, $tagsComercio) && !preg_match($pattern, $tagsServicos) && !preg_match($pattern, $tagsClass)) {
	  	echo '
		<div class="container container-produtos">
			<div class="row" id="educacao">
				<div class="col-12">
					<h1 style="color: #e67e37; font-weight: bold; font-size: 2.1rem; margin-bottom: 0px;">Ops... Categoria não encontrada =(</h1>
					<hr>
				</div>
			</div>
		</div><br><br><br><br>
		';
	}
	
} else {
	echo '
	<div class="container container-produtos">
			<div class="row" id="educacao">
				<div class="col-12">
					<h1 style="color: #e67e37; font-weight: bold; font-size: 2.1rem; margin-bottom: 0px;">Ops... Categoria não encontrada =(</h1>
					<hr>
				</div>
			</div>
		</div><br><br><br><br>
		';
}




include_once('assets/footer.php')
?>