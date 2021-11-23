<?php
include_once('assets/header.php');
include_once('assets/config.php');
$convenio = $_POST['s'];		
?>
<title><?php echo title('infoconvenios','id',$convenio);?></title>
<meta name="description" content="<?php echo metaDescription('infoconvenios','id',$convenio);?>">
</head>
<body>
<?php
include_once('assets/menu.php');
?>
<div class="container container-convenios">

<?php 

$credenciado = listarCredenciados('infoconvenios','id',$convenio);
?>
</div>
<?php
	include_once('assets/footer.php');
?>