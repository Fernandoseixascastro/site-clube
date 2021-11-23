<?php
include_once('../assets/config.php');
include_once('../assets/header.php');
//iniciamos a sessão
session_name("loginUsuario");
session_start();

//antes de fazer os cálculos, comprovo que o usuário está logado
//utilizamos o mesmo script que antes
if ($_SESSION["autenticado"] != "SI") {
    //se não está logado o envio à página de autenticação
    header("Location: ../login.php");
} else {
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
		<div class="col-3 pl-0">
			<?php gerarMenuUser(); ?>


		</div>
		<div class="col-9">
			<form>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nome">Nome</label>
					    <input type="text" class="form-control" id="nome" readonly="true" value="">
					</div>
					<div class="form-group col-md-6">
					    <label for="cpf">CPF</label>
					    <input type="text" class="form-control" id="cpf"  readonly="true" value="">
					</div>
				</div>
				<div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-row">
				    <div class="form-group col-md-6">
					    <label for="cargo">Cargo</label>
					    <input type="cargo" class="form-control" id="inputEmail4" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
					    <label for="inputPassword4">Password</label>
					    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
					</div>
				</div>
					  <button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
	</div>
</div>