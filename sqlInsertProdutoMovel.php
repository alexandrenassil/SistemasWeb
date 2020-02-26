<?php

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
    //$login = $_POST['login'];
    //$nome = $_POST['nome'];
    $login = $_POST['login'];
    $nome = '';
    $QtdReg = 0;
    
    for ($i = 0; $i <= $qtdDep; $i++)
    {
        $Insert = "INSERT INTO [NOME DO BANCO].[dbo].[NOME DA BASE] (MAILING,TIPO_VENDA, VENDA_APARELHO, NET_MOVEL, QTD_DEPENDENTES, CLASSIFICACAO_PRODUTO,OFERTA,TIPO_DEPENDENTE,BONUS,LOGIN,NOME,DATA_INSERT) VALUES ('".$mailing."','".$tipoVenda."','".$vendaAparelho."','".$netMovel."','".$i."','".$classificacaoProduto."','".$oferta."','".$tipoDependente."','".$bonus."','".$login."','".$nome."',GETDATE())";
        
        if(mssql_query(utf8_decode($Insert)))
        {
            $QtdReg=$QtdReg+1; 
        }
    }

    if($QtdReg > 0)
    {
        echo '<div class="msg_upload_oper">Foram inseridos: '.$QtdReg.' registros!';
		echo '<br> <a href="../index2.php?login='.$login.'">Voltar</a></div>';
        //echo "<script>alert('Foram inseridos: ".$QtdReg." registros!');document.location='../index2.php?login=".$login."';</script>";
    }
    else
    {
        echo '<div class="msg_upload_oper">Não foi possivel inserir os registros, favor tentar novamente!';
		echo '<br> <a href="../index2.php?login='.$login.'">Voltar</a></div>';
        //echo "<script>alert('Não foi possivel inserir os registros, favor tentar novamente!');document.location='../index2.php?login=".$login."';</script>";
    }





?>