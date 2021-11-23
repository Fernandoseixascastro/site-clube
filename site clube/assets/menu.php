	<?php
include_once('config.php');
?>


	<header>

		<div id="nav-redes-sociais">
			<div class="animation m-auto">
				<p class="line anim-typewriter text-white text-bold m-0">Associado, aqui você tem descontos de 
					<strong>15% a 60%</strong>. Aproveite!
				</p>
			</div>
			<div id="redes-sociais">
				<a href="https://www.instagram.com/clube_do_consumidor_paraiba/" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-facebook-square"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<div class="container container-mobile-menu">
			<nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
		        <a class="navbar-brand" <?php echo 'href="'.SITE.'">';
		        	echo '<img src="'.SITE.'/assets/img/logo.png" width="120px" height="auto"></a>';
		        	?>
		        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navcol-1">
			        <ul class="nav navbar-nav" id="menu-superior">
				        <li class="nav-item" role="presentation">
				        	<a class="nav-link active" <?php echo 'href="'.SITE.'/entidades-representativas.php"><img src="'.SITE.'/assets/img/enterprise.png" class="icon-menu-superior" alt="Empreendimento">';?>Entidades Representativas</a>
				        </li>
				        <li class="nav-item" role="presentation">
				        	<a class="nav-link active" <?php echo 'href="'.SITE.'/carteira.php"><img src="'.SITE.'/assets/img/id-card.png" class="icon-menu-superior" alt="identidade">';?>Emitir <strong>Carteira virtual</strong></a>
				        </li>
				        <li class="nav-item" role="presentation">
				        	<form class="input-group" method="get" <?php echo 'action="'.SITE.'/search.php">';?>
								<div class="input-group" >
									<input id="table_filter" type="text" class="form-control" aria-label="Entrada de dados para escolher a categoria" placeholder="O que você procura?" name="s" list="categorias" >
									<datalist id="categorias">
										<option value="Saúde">Pesquisar Categoria</option>
										<option value="Gastronomia">Pesquisar Categoria</option>
										<option value="Lazer">Pesquisar Categoria</option>
										<option value="Serviços">Pesquisar Categoria</option>
										<option value="Educação">Categoria sugerida</option>
										<option value="Comércio">Pesquisar Categoria</option>
										<option value="Imovéis">Pesquisar Categoria</option>
									</datalist>
									<div class="input-group-btn" >
										<i class="fa fa-filter"></i>
										<button id="searchBtn" type="submit" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" ><i class="fa fa-search"></i></span></button>
									</div>
								</div>
							</form>
				        </li>
				        <li class="nav-item" role="presentation">
				        	<a class="nav-link active" <?php echo 'href="'.SITE.'/area-empresa.php"><img src="'.SITE.'/assets/img/hand-shake.png" class="icon-menu-superior" alt="aperto de mãos">';?><strong>Área da Empresa</strong> Validar <span>Carteira</span></a>
				        </li>
				        <li class="nav-item" role="presentation">
				        	<a class="nav-link active" target="_blank" href="https://web.whatsapp.com/send?phone=5583988280881" ><i class="fa fa-whatsapp"></i><p>Fale Conosco</p></a>
				        </li>
			        </ul>

		    	</div>
			    
	        </nav>
	        <form  method="get" <?php echo 'action="'.SITE.'/categorias.php">';?>
	        <nav class="navbar navbar-light navbar-expand-lg" id="menu-inferior">
	        	<div class="collapse navbar-collapse menu-inferior" id="navcol-1">
				        <ul class="navbar-nav" role="menu" aria-labelledby="dLabel">
						    <li class="nav-item">
						    	<button name="categoria" value="lazer" style="background: none;border: none;">
						    		<a class="nav-link" <?php echo '><img src="'.SITE.'/assets/img/traveling.png" class="icon-menu" alt="viagem">'; ?> Lazer</a>
						    	</button>
						    </li>
						    <li class="nav-item dropdown">
						    	<button name="categoria" value="educação" style="background: none;border: none;">
						    		<a class="nav-link" <?php echo '><img src="'.SITE.'/assets/img/education.png" class="icon-menu" alt="educação">'; ?> Educação<i class="fa fa-sort-down"></i></a>
						    	</button>
								<div class="dropdown-content">
								  <button name="categoria" value="educação financeira" style="background: none;border: none;">
						    		<a class="nav-link"> Educação Financeira</a>
						    	</button>
								</div>
	
						    </li>
						    <li class="nav-item">
						    	<button name="categoria" value="saúde" style="background: none;border: none;">
						    		<a class="nav-link" <?php echo '><img src="'.SITE.'/assets/img/insurance.png" class="icon-menu" alt="saúde">'; ?> Saúde</a>
						    	</button>
						    </li>
						    <li class="nav-item">
						    	<button name="categoria" value="gastronomia" style="background: none;border: none;">
						    		<a class="nav-link" <?php echo '><img src="'.SITE.'/assets/img/dish.png" class="icon-menu" alt="prato">'; ?> Gastronomia</a>
						    	</button>
						    </li>
						    <li class="nav-item">
						    	<button name="categoria" value="serviços" style="background: none;border: none;">
						    		<a class="nav-link" <?php echo '><img src="'.SITE.'/assets/img/technical-support.png" class="icon-menu" alt="suporte tecnico">'; ?> Serviços</a>
						    	</button>
						    </li>
						    <li class="nav-item">
						    	<button name="categoria" value="comercio" style="background: none;border: none;">
						    		<a class="nav-link" <?php echo '><img src="'.SITE.'/assets/img/shopping-bag.png" class="icon-menu" alt="sacola de compras">'; ?> Comercio</a>
						    	</button>
						    </li>
						    <li class="nav-item">
						    	<button name="categoria" value="classificados" style="background: none;border: none;">
						    		<a class="nav-link" <?php echo '><img src="'.SITE.'/assets/img/town.png" class="icon-menu" alt="casa">'; ?> Classificados</a>
						    	</button>
					    </ul>
				</div>
	        </nav>
	        </form>

    	</div>

	</header>