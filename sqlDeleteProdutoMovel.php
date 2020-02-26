<?php
    session_start();
    
    require '../conexao.php';
    
    $id = $_POST['id'];
    $login = $_POST['login'];
    
    $nome = "";
    $scriptBackUp = "
    INSERT INTO [NOME DO BANCO].[dbo].[NOME DA BASE] ([ID],[MAILING],[TIPO_VENDA],[VENDA_APARELHO],[NET_MOVEL],[QTD_DEPENDENTES],[CLASSIFICACAO_PRODUTO],[OFERTA],[TIPO_DEPENDENTE],[BONUS],[LOGIN],[NOME],[DATA_INSERT],DATA_ALTERACAO,LOGIN_ALTERACAO, NOME_ALTERACAO)
    SELECT [ID],[MAILING],[TIPO_VENDA],[VENDA_APARELHO],[NET_MOVEL],[QTD_DEPENDENTES],[CLASSIFICACAO_PRODUTO],[OFERTA],[TIPO_DEPENDENTE],[BONUS],[LOGIN],[NOME],[DATA_INSERT],GETDATE(),'".$login."','teste desenvolvimento' 
    FROM [NOME DO BANCO].[dbo].[NOME DA BASE] WHERE ID = ".$id;
   
    header('Content-Type: text/html; charset=utf-8');

    mssql_query($scriptBackUp);

    $ScriptUpdate = "DELETE FROM [NOME DO BANCO].[dbo].[NOME DA BASE] WHERE ID = ".$id;
    //echo $tipoDependente;
    //echo $ScriptUpdate;

    if(mssql_query($ScriptUpdate))
    {
        echo "<script>alert('Dados removidos com sucesso!');document.location='../index2.php?login=".$login."';</script>";
    }
    else
    {
        echo "<script>alert('Não foi possivel remover as informações, favor tentar novamente!');document.location='../index2.php?login=".$login."';</script>";
    }

?>
