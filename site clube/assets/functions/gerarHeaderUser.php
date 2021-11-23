<?php

function gerarheaderUser($user) {
	?>
	<div class="topo-perfil">
		<p>Olá, <?php echo $user; ?></p>
		<p><a href="../logout.php"><button type="button" class="btn btn-danger">Sair</button></a></p>
	</div>
	<?php
	return ;
}



?>