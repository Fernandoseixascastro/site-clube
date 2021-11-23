<?php

function gerarMenuShop() {
	?>
<div id="mySidenav" class="sidenav">
	<p class="text-white h5">Olá, <?php echo $_SESSION['usuarioNome']; ?></p>
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  	<?php echo'<a class="text-white" href="'.SITE.'/shop/voucher.php">'; ?>Validar Voucher's</a>
  	<?php echo'<a class="text-white" href="'.SITE.'/shop/voucher-utilizado.php">'; ?>Voucher's Validados</a>
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