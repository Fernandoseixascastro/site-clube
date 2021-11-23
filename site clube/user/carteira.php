<?php
include_once('../assets/config.php');
include_once('../assets/header.php');

//iniciamos a sessão
session_name("loginUsuario");
session_start();

if (!isset($_SESSION["usuarioNome"])) {
    header("Location: ../login.php");
} 
else {
    //senão, calculamos o tempo transcorrido
    $dataSalva = $_SESSION["ultimoAcesso"];
    $agora = date("Y-n-j H:i:s");
    $tempo_transcorrido = (strtotime($agora)-strtotime($dataSalva));

    //comparamos o tempo transcorrido
     if($tempo_transcorrido >= 3600) {
     //se passaram 1h ou mais
      session_destroy(); // destruo a sessão
      header("Location: ../login.php"); //envio ao usuário à página de autenticação
      //senão, atualizo a data da sessão
    }else {
    $_SESSION["ultimoAcesso"] = $agora;
   }
}

?>
	<title>Página do usuário</title>
	<meta name="description" content="Painel de administração do usuario">
</head>
<body id="home-user">
	<header style="height: 10%;">
		<?php gerarheaderUser($_SESSION['usuarioNome']); ?>
	</header>
<div class="container-fluid" style="height: 90%;">
	<div class="row w-100 h-100">
		<div class="col-3 pl-0" style="position: absolute;left: 10px;">
			<?php gerarMenuUser(); ?>
		</div>
		<div class="col-12" style="margin-top: 50px;">
			<h3 class="panel-title">Imprimir Carteira</h3>
            <hr style="border-bottom: 1px solid #55555a;">
			<?php gerarCarteira('usuarios',$_SESSION['usuarioCPF'],$_SESSION['usuarioNome']); ?>
		</div>
	</div>
</div>