<?php
include_once('config.php');


if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
	$login = addslashes($_POST["login"]);
  $senha = md5(addslashes($_POST["senha"]));

    $usuarios = listar('usuarios');
    foreach ($usuarios as $usuario) {
    	if ($usuario->cpf == $login || $usuario->email == $login && $usuario->senha == $senha) {
      		if ($usuario->acesso == 'user') {
      			// Se a sessão não existir, inicia uma
		      	if (!isset($_SESSION)) {
              session_name("loginUsuario");
              session_start();
              $_SESSION["ultimoAcesso"]= date("Y-n-j H:i:s");
              // Salva os dados encontrados na sessão
              $_SESSION['usuarioNome'] = $usuario->nome;
              $_SESSION['usuarioCPF'] = $usuario->cpf;
              $_SESSION['usuarioTipo'] = $usuario->acesso;
              header("Location: ../user/voucher.php"); exit;
            }
      		}
          if ($usuario->acesso == 'shop') {
            // Se a sessão não existir, inicia uma
            if (!isset($_SESSION)) {
              session_name("loginUsuario");
              session_start();
              $_SESSION["ultimoAcesso"]= date("Y-n-j H:i:s");
              // Salva os dados encontrados na sessão
              $_SESSION['usuarioNome'] = $usuario->nome;
              $_SESSION['usuarioCPF'] = $usuario->cpf;
              $_SESSION['usuarioTipo'] = $usuario->acesso;
              header("Location: ../shop/voucher.php"); exit;
            }
          }
      	} else {
      		echo "<br>deu ruim";
      	}
    }
} else {
	echo "tem campo em branco";
}

?>