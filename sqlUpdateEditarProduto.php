<?php
    header('Content-Type: text/html; charset=utf-8');
    require "../conexao.php";

    $id = $_POST['id'];
    
    $mailing = $_POST['Mailing'];
    $tipoVenda = $_POST['TipoVenda'];
    $vendaAparelho = $_POST['VendaAparelho'];
    $netMovel = $_POST['NetMovel'];
    $qtdDep = $_POST['QtdDep'];
    $classificacaoProduto = $_POST['ClassificProduto'];
    $oferta = $_POST['Oferta'];
    $tipoDependente = $_POST['TipoDependente'];
    $bonus = $_POST['Bonus'];
    $login = $_POST['login'];
    $nome = '';
    //$login = 't_dev';
    //$nome = 'Teste Desenvolvimento';
    
    $ScriptUpdate = "UPDATE A SET MAILING = '".$mailing."', TIPO_VENDA = '".$tipoVenda."', VENDA_APARELHO = '".$vendaAparelho."', NET_MOVEL = '".$netMovel."', QTD_DEPENDENTES = '".$qtdDep."', CLASSIFICACAO_PRODUTO = '".$classificacaoProduto."', OFERTA = '".$oferta."', TIPO_DEPENDENTE = '".$tipoDependente."', BONUS = '".$bonus."', LOGIN = '".$login."', NOME = '".$nome."', DATA_INSERT = GETDATE() FROM [NOME DO BANCO].[dbo].[NOME DA BASE] AS A WHERE ID = ".$id;
    //echo $tipoDependente;
    //echo $ScriptUpdate;

    if(mssql_query(utf8_decode($ScriptUpdate)))
    {
        echo '<div class="msg_upload_oper">Dados atualizados com sucesso!';
		echo '<br> <a href="../index2.php?login='.$login.'">Voltar</a></div>';
        //echo "<script>alert('Dados atualizados com sucesso!');document.location='../index2.php?login='".$login.";</script>";
    }
    else
    {
        echo '<div class="msg_upload_oper">Não foi possivel atualizar as informações, favor tentar novamente!';
		echo '<br> <a href="../index2.php?login='.$login.'">Voltar</a></div>';
        //echo "<script>alert('Não foi possivel atualizar as informações, favor tentar novamente!');document.location='../index2.php?login='".$login.";</script>";
    }

?>