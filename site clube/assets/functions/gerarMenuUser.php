<?php

function gerarMenuUser() {
	?>
<div id="mySidenav" class="sidenav">
	<p class="text-white h5">Olá, <?php echo $_SESSION['usuarioNome']; ?></p>
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  	<?php echo'<a class="text-white" href="'.SITE.'/user/voucher.php">'; ?>Ver Voucher Ativos</a>
  	<?php echo'<a class="text-white" href="'.SITE.'/user/voucher-utilizado.php">'; ?>Ver Voucher utlilizados</a>
	<?php echo'<a class="text-white" href="'.SITE.'/user/carteira.php">'; ?>Ver Carteira</a>
  	<div class="btn-sair">
		<a href="../index.php"><button type="button" class="btn btn-light w-100">Voltar para loja</button></a>
	</div>	
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

			<?php
			return ;
}



?>