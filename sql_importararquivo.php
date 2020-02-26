<?php
	//echo "Login=".$login;
	//require 'conexao.php';
	require 'sqlbackupprodutomovel.php';
			
	if($backUpSucess == 1)
	{
		// inclui a conexão
		//require '../conexao.php';
		$ScriptDelete = "DELETE [NOME DO BANCO].[dbo].[NOME DA BASE]";
		if(mssql_query($ScriptDelete))
		{
			// Abre o Arquvio no Modo r (para leitura)
			$ArqPost = $nome_do_arquivo;
			$arquivo = fopen ('http://10.100.0.000/desenvolvimento/projetos/anexos/'.$ArqPost, 'r');
			// Lê o conteúdo do arquivo
			while(!feof($arquivo))
			{
				// Pega os dados da linha
				$linha = fgets($arquivo, 1024);
				// Divide as Informações das celular para poder salvar
				$dados = explode(';', $linha);
				// Verifica se o Dados Não é o cabeçalho ou não esta em branco
				if($dados[0] != 'MAILING' && !empty($linha))
				{
					$ScriptInsert = "INSERT INTO [CUSTOMER_NCM_121].[dbo].[NET_COMBO_MULTI_PRODUTO_NET_MOVEL_PRJ_712] (MAILING, TIPO_VENDA, VENDA_APARELHO, NET_MOVEL,QTD_DEPENDENTES,CLASSIFICACAO_PRODUTO,OFERTA,TIPO_DEPENDENTE,BONUS,LOGIN,NOME,DATA_INSERT) ";
					$ScriptInsert .= "VALUES ('".$dados[0]."','".$dados[1]."','".$dados[2]."','".$dados[3]."',".$dados[4].",'".$dados[5]."','".$dados[6]."','".$dados[7]."','".$dados[8]."','".$login."','Teste Desenvolvimento',GETDATE())";
					mssql_query($ScriptInsert);
				}
			}
			// Fecha arquivo aberto
			fclose($arquivo);
			}
		}


?>