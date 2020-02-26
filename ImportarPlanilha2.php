<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Motiva Contact Center</title>
	<link rel="stylesheet" href="css/estilo.css" />
	<script type="text/javascript" src="js/micoxAjax.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<link rel="icon" href="img/icon.png">
	<link type="text/css" href="js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
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
	    error_reporting(E_ALL);
		ini_set('display_errors', 'On');
		session_start(); //INICIA SESSÃO PARA PEGAR VALORES DE VARIÁVEIS SETADAS NA PàGINA//
		 
		// Seta a hora para a hora local
		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
		$DataHora = Date("YmdHis");
		$Produto = $_POST['Produto'];
		$Opcao = $_POST['Opcao'];
		$login = $_POST['login'];
		require_once 'conexao.php'; //INICIA CONEXÃO COM O BANCO DE DADOS NA BASE CUSTOMER_121//
		$MSG_ERRO = "";
		$Upload = 0;
		
		/*  #####   ROTINA PARA MANDAR ARQUIVO PARA O BANCO DE DADOS  ######  */    
		//Pega nome de arquivo carregado//
		$nome_corrente = $_FILES['arquivo']['name'];
		if ($nome_corrente != "")
		{	//Configurações do arquivo
			$_UP['pasta'] = 'anexos/';							// Pasta onde o arquivo vai ser salvo
			$_UP['tamanho'] = 1024 * 1024 * 2;					// 2Mb // Tamanho máximo do arquivo (em Bytes)
			$_UP['extensoes'] = array('csv', 'xls', 'xlsx');	// Array com as extensões permitidas
			$_UP['renomeia'] = false;							// Renomeia o arquivo? (Se true, o arquivo será¡ salvo e um nome único)

			// Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

			// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
			if ($_FILES['arquivo']['error'] != 0)
			{
				$MSG_ERRO .= "Não foi possí­vel fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']];
			}
			else
			{	
				$anexo = $_FILES['arquivo']['name'];
				// Faz a verificação da extensão do arquivo
				$valueExt = explode('.', $anexo);
				$valueEnd = end($valueExt);
				$extensao = strtolower($valueEnd);
				if (array_search($extensao, $_UP['extensoes']) === false)
				{
					$MSG_ERRO .= "Por favor, envie arquivos com a extenção 'CSV'<br>";
				}
				// Faz a verificão do tamanho do arquivo
				else if ($_UP['tamanho'] < $_FILES['arquivo']['size'])
				{
					$MSG_ERRO .=  "O arqvuivo enviado é muito grante, envie arquivos de até 2Mb. <br>";
				}
				// O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta
				else
				{
					require 'conexao_customer_121.php'; 
					// Primeiro verifica se deve trocar o nome do arquivo
					if ($_UP['renomeia'] == true)
					{
						$nome_correto = $nome_corrente;
						$nome_arquivo = explode(".",$nome_corrente);
						$nome_arq = $DataHora.'_'.$nome_correto;
						// Cria um nome
						$nome_final = rename($nome_corrente, $nome_arq);
					}
					else
					{
						// Mantém o nome original do arquivo
						$nome_final = $_FILES['arquivo']['name'];
					}
					// Depois verifica se é possí­vel mover o arquivo para a pasta escolhida
					if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final))
					{
						$nome_arquivo = explode(".",$nome_corrente);
						$nome_correto = $nome_corrente;
						$nome_arq = 'anexos/'.$DataHora.'_'.$nome_correto;
						$nome_corrente = 'anexos/'.$nome_corrente;
						rename($nome_corrente, $nome_arq);
						$nome_do_arquivo = $DataHora.'_'.$nome_correto;
						//require 'conexao_customer_121.php'; 
						//$newName = "UPDATE CUSTOMER_LIONS set tx_Arquivo = '$nome_do_arquivo' WHERE INDICE = '".$form_indice."'";
						//$recebe_novo_nome = mssql_query($newName);
						$Upload = 1;
					}
					else
					{
						// Não foi possí­vel fazer o upload, provavelmente a pasta está incorreta
						$MSG_ERRO .= "Não foi possí­vel enviar o arquivo, tente novamente<br>";
					}
				}
			}
		}
		else
		{
			$MSG_ERRO .= "Erro! Registro não foi salvo". mssql_error()."<br>";
		}
		// Caso o upload do arquivo tenha sido feito com sucesso, inicia o processo de importar os dados no banco de dados
		if($Upload == 1)
    	{ // criar uma função pois irei precisar de outro upload
			require 'sql/sql_importararquivo.php';
        	
    	}
	?>
	</head>
	<body>
    	<?php 
			if ( $MSG_ERRO != "" )
			{
            	echo '<p>'.$MSG_ERRO.'</p>';
			}
			else
			{
				echo '<div class="msg_upload_oper">O upload dos produtos foi efetuado com sucesso:';
				echo '<br> <a href="index2.php?login='.$login.'">Voltar</a></div>';
        	}
    	?> 
	</body>
</html>
