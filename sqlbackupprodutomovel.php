<?php
    //echo "login Backup=".$login;
    

    $ScriptBackUp = "INSERT INTO [NOME DO BANCO].[dbo].[NOME DA BASE] ([ID],[MAILING],[TIPO_VENDA],[VENDA_APARELHO],[NET_MOVEL],[QTD_DEPENDENTES],[CLASSIFICACAO_PRODUTO],[OFERTA],[TIPO_DEPENDENTE],[BONUS],[LOGIN],[NOME],[DATA_INSERT],DATA_ALTERACAO,LOGIN_ALTERACAO, NOME_ALTERACAO) SELECT [ID],[MAILING],[TIPO_VENDA],[VENDA_APARELHO],[NET_MOVEL],[QTD_DEPENDENTES],[CLASSIFICACAO_PRODUTO],[OFERTA],[TIPO_DEPENDENTE],[BONUS],[LOGIN],[NOME],[DATA_INSERT],GETDATE(),'".$login."','teste desenvolvimento' FROM [NOME DO BANCO].[dbo].[NOME DA BASE] ";
    if(mssql_query($ScriptBackUp))
    {
        return $backUpSucess = 1;
        echo '<div class="msg_upload_oper">Backup efetuado com sucesso';
        echo '<br> <a href="index2.php?login='.$login.'">Voltar</a></div>';
    }
    else
    {
        $backUpSucess = 0;
        $MSG_ERRO .= "Nao foi possivel efetuar o backup da tabela". mssql_error()."<br>";
    }

?>