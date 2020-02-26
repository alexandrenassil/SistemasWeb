<?php
    
    require "../conexao.php";
    $produto = $_GET['Produto'];
    $opcao = $_GET['opcao'];
    echo "<script>alert('".$opcao."');</script>";
    if($opcao == "EXCLUIR")
    {
        $arquivoSQL = "sql/sqlDeleteProdutoMovel.php";
        $nomeBtn = "Remover";
    }
    else if ($opcao == "EDITAR")
    {
        $arquivoSQL = "sql/EditarProdutoMovel.php";
        $nomeBtn = "Editar";
    }

    $Select = "SELECT
                    [ID]
                    ,[MAILING]
                    ,[TIPO_VENDA]
                    ,[VENDA_APARELHO]
                    ,[NET_MOVEL]
                    ,[QTD_DEPENDENTES]
                    ,[CLASSIFICACAO_PRODUTO]
                    ,[OFERTA]
                    ,[TIPO_DEPENDENTE]
                    ,[BONUS]
                FROM
                    [NOME DO BANCO].[dbo].[NOME DA BASE]
                ORDER BY ID";

    $Script = mssql_query($Select);
    
    while($dados = mssql_fetch_array($Script))
    {
        echo "<tr>";
        echo "<td name='".$dados['ID']."'>".$dados['ID']."</td>";
        echo "<td>".utf8_encode($dados['MAILING'])."</td>";
        echo "<td>".utf8_encode($dados['TIPO_VENDA'])."</td>";
        echo "<td>".utf8_encode($dados['VENDA_APARELHO'])."</td>";
        echo "<td>".utf8_encode($dados['NET_MOVEL'])."</td>";
        echo "<td>".$dados['QTD_DEPENDENTES']."</td>";
        echo "<td>".utf8_encode($dados['CLASSIFICACAO_PRODUTO'])."</td>";
        echo "<td>".utf8_encode($dados['OFERTA'])."</td>";
        echo "<td>".utf8_encode($dados['TIPO_DEPENDENTE'])."</td>";
        echo "<td>".utf8_encode($dados['BONUS'])."</td>";
        echo "<td><form method='get' action='".$arquivoSQL."'><input type='hidden' id='id' name='id' value='".$dados['ID']."'><button type='submit'>".$nomeBtn."</button></form></td>";
        echo "</tr>";
    }


?>