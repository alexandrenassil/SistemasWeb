<?php
    header('Content-Type: text/html; charset=utf-8');
    require "../conexao.php";
    
    $id = $_POST['id'];
    $login = $_POST['login'];
    $mailing = $_POST['Mailing'];
    $tipoVenda = $_POST['TipoVenda'];
    $vendaAparelho = $_POST['VendaAparelho'];
    $netMovel = $_POST['NetMovel'];
    $qtdDep = $_POST['QtdDep'];
    $classificacaoProduto = $_POST['ClassificProduto'];
    $oferta = $_POST['Oferta'];
    $tipoDependente = $_POST['TipoDependente'];
    $bonus = $_POST['Bonus'];
    
    //$nome = $_POST['nome'];
    $login - $_POST['login'];
    $nome = '';
    
    $ScriptUpdate = "UPDATE A SET MAILING = '".$mailing."', TIPO_VENDA = '".$tipoVenda."', VENDA_APARELHO = '".$vendaAparelho."', NET_MOVEL = '".$netMovel."', QTD_DEPENDENTES = '".$qtdDep."', CLASSIFICACAO_PRODUTO = '".$classificacaoProduto."', OFERTA = '".$oferta."', TIPO_DEPENDENTE = '".$tipoDependente."', BONUS = '".$bonus."', LOGIN = '".$login."', NOME = '".$nome."', DATA_INSERT = GETDATE() FROM [NOME DO BANCO].[dbo].[NOME DA BASE] AS A WHERE ID = ".$id;
    //echo $tipoDependente;
    //echo $ScriptUpdate;

    if(mssql_query(utf8_decode($ScriptUpdate)))
    {
        echo "<script>alert('Dados atualizados com sucesso!');document.location='../index2.php?login=".$login."';</script>";
    }
    else
    {
        echo "<script>alert('Não foi possivel atualizar as informações, favor tentar novamente!');document.location='../index2.php?login=".$login."';</script>";
    }

?>