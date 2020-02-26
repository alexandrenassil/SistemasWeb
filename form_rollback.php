<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Motiva Contact Center</title>
	<link rel="stylesheet" href="../css/estilo.css" />
	<script type="text/javascript" src="../js/micoxAjax.js"></script>
	<script type="text/javascript" src="../js/ajax.js"></script>
	<link rel="icon" href="../img/icon.png">
	<link type="text/css" href="../js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
	<script type="text/javascript" src="../js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
	<style>
		a:link    {color:#000000}
		a:visited {color:#000000}
		div.msg_upload_oper
		{
			font-family: "Arial";
			font-size: 12px;    
		}
	</style>
	<?php
		ini_set('display_errors', 1);
    	ini_set('display_startup_errors', 1);
    	ini_set('display_errors', 'On');
		error_reporting(E_ALL);
		session_start(); //INICIA SESSÃO PARA PEGAR VALORES DE VARIÁVEIS SETADAS NA PàGINA//
		 
		// Seta a hora para a hora local
		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
		//require_once 'conexao_customer_121.php'; //INICIA CONEXÃO COM O BANCO DE DADOS NA BASE CUSTOMER_121//
        $nome_corrente = $_POST['BackUp']; //Pega nome de arquivo carregado
        $nome_do_arquivo = $nome_corrente;
		$login = $_POST['login'];
		require '../conexao_customer_121.php';
		require '../sql/sql_importararquivo.php';
	?>
	</head>
	<body>
    	<?php 
			
			
			echo '<div class="msg_upload_oper">Rollback do arquivo <b>'.$nome_corrente.'</b> efetuado com sucesso:';
			echo '<br> <a href="../index2.php?login='.$login.'">Voltar</a></div>';
    	?> 
	</body>
</html>
