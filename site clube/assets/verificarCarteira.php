<?php
require 'config.php';
?>
<script>
	function verificaCadastro() {
		<?php
			$pdo = conectar();
			$nome = addslashes($_POST["nome"]);
			$nome = strtoupper($nome);
			$sql = "UPDATE usuarios SET nome = upper(nome);";
			$sql = $pdo->query($sql);
			$sql = "UPDATE usuarios SET cargo = upper(cargo);";
			$sql = $pdo->query($sql);
			$sql = "SELECT * FROM usuarios WHERE nome = '$nome'";
			$sql = $pdo->query($sql);	
		?>
	}
	
</script>
<?php





?>