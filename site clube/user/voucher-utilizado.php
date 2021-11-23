<?php
include_once('../assets/config.php');
include_once('../assets/header.php');

//iniciamos a sessão
session_name("loginUsuario");
session_start();

//antes de fazer os cálculos, comprovo que o usuário está logado
//utilizamos o mesmo script que antes
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
	<meta name="description" content="Pegue seu voucher e ganhe descontos">
</head>
<body id="voucher-user">
<header style="height: 10%;">
    <?php gerarheaderUser($_SESSION['usuarioNome']); ?>
</header>
<div class="container-fluid" style="height: 90%;">
    <div class="row w-100 h-100">
        <div class="col-3 pl-0" style="position: absolute;left: 10px;">
            <?php gerarMenuUser(); ?>
        </div>
        <div class="col-12" style="margin-top: 50px;">
            <div class="panel panel-primary filterable w-100 table-responsive-xl">
                <div class="panel-heading">
                    <h3 class="panel-title">Voucher's Utilizados</h3>
                    <hr style="border-bottom: 1px solid #55555a;">
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> <i class="fa fa-filter"></i> Filtrar</button>
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-light">
                        <tr class="filters">
                            <th><input type="text" class="form-control form-filter" placeholder="#" disabled></th>
                            <th><input type="text" class="form-control form-filter" placeholder="Empresa" disabled></th>
                            <th><input type="text" class="form-control form-filter" placeholder="Desconto" disabled></th>
                            <th><input type="text" class="form-control form-filter" placeholder="Código" disabled></th>
                            <th><input type="text" class="form-control form-filter" placeholder="Data" disabled></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php listarVoucher('voucher','id',$_SESSION['usuarioCPF'],'utilizado','sim'); ?>
                    </tbody>
                </table>
            </div>
        </div>
  
    </div>
</div>
<?php echo '<script src="'.SITE.'/assets/js/jquery-3.3.1.slim.min.js"></script>';?>

<?php echo '<script src="'.SITE.'/assets/js/js-table.js"></script>';?>