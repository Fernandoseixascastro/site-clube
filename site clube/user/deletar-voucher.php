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

$code = $_POST['code'];
deletarVoucher('voucher','codigo', $code);
header("Location: voucher.php");


?>

<?php echo '<script src="'.SITE.'/assets/js/jquery-3.3.1.slim.min.js"></script>';?>

<?php echo '<script src="'.SITE.'/assets/js/js-table.js"></script>';?>