<?php
include_once('assets/config.php');
include_once('assets/header.php');

//iniciamos a sessão
session_name("loginUsuario");
session_start();

if (isset($_SESSION["usuarioNome"])) {
    if ($_SESSION['usuarioTipo']=='user') {
        header("Location: user/voucher.php");
    }
    else {
        header("Location: shop/voucher.php");
    }
    
}

?>
	<title>Clube do Consumidor</title>
	<meta name="description" content="Associados COOPANEST com descontos especiais">
</head>
<body id="home">
<?php
include_once('assets/menu.php');
?>	
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="assets/validarLogin.php" method="post">
                            <h3 class="text-center">Login</h3>
                            <div class="form-group">
                                <label for="login">CPF ou E-mail:</label><br>
                                <input type="text" name="login" id="login" class="form-control" placeholder="E-mail ou CPF">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <!--<label for="remember-me"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label>--><br>
                                <input type="submit" name="submit" class="btn btn-info w-100" value="Entrar">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Não possui cadastro?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
	include_once('assets/footer.php');
?>