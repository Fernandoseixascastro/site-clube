<?php
//define('SITE', 'http://localhost/v3');
define('SITE', 'http://clubeconsumidor.ml');


ini_set('display_errors', 1);
date_default_timezone_set('America/Sao_Paulo');
// Conexão com o Banco
require 'functions/conexaoPDO.php';
require 'functions/listarPDO.php';
require 'functions/inserirVoucherPDO.php';

// Funções das Páginas Gerais
require 'functions/gerarCards.php';
require 'functions/gerarPesquisa.php';
require 'functions/filtroPorcertagem.php';
require 'functions/listarCredenciados.php';
require 'functions/inserirCodCliente.php';

// Funções das Páginas Usando Login
require 'functions/verificarVoucher.php';
require 'functions/gerarVoucher.php';
require 'functions/listarVoucher.php';
require 'functions/gerarMenuUser.php';
require 'functions/gerarHeaderUser.php';
require 'functions/deletarVoucher.php';
require 'functions/gerarCarteira.php';
require 'functions/listarVoucherShop.php';
require 'functions/gerarMenuShop.php';
require 'functions/validarVoucher.php';

?>