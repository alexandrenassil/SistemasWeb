<?php
    require '../conexao.php';
    $login = $_POST['login'];
    $id = $_POST['id'];

    $scriptSelect = "SELECT [ID]
    ,[MAILING]
    ,[TIPO_VENDA]
    ,[VENDA_APARELHO]
    ,[NET_MOVEL]
    ,[QTD_DEPENDENTES]
    ,[CLASSIFICACAO_PRODUTO]
    ,[OFERTA]
    ,[TIPO_DEPENDENTE]
    ,[BONUS]
    FROM [NOME DO BANCO].[dbo].[NOME DA BASE] WHERE ID = ".$id;

    $Script = mssql_query($scriptSelect);
    $dados = mssql_fetch_array($Script);
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
                bottom: 0;
                width: 100%;
                position: fixed;
            }
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even) {
                background-color: #dddddd;
            }
            #tabelaRemover input{
                color:navy;
                width:100%;
            }
            #tabelaEditar input{
                color:navy;
                width:100%;
            }
        </style>
        <script>
            function confirmaExcluir()
            {
                var x;
                var r=confirm("Você deseja excluir este produto!");
                if (r==true)
                {
                    document.getElementById('formExcluir').submit();
                }
                else
                {
                    
                }
            }
        </script>
    </head>
    <body>
        <h5>Excluir Produto Movel<br><br>
        <form method="post" name="formExcluir" id="formExcluir" action="../sql/sqlDeleteProdutoMovel.php">
            <input type='hidden' id='id' name='id' value='<?php echo $id; ?>'>
            <input type='hidden' id='login' name='login' value='<?php echo $login; ?>'>
                <table class="table table-striped table-sm" name="removerProduto" id="removerProduto" font-size="1rem">
                    <thead>
                        <tr>
                            <th>Indice</th>
                            <th>Mailing</th>
                            <th>Tipo Venda</th>
                            <th>Venda Aparelho</th>
                            <th>Net Movel</th>
                            <th>Qtd. Dependentes</th>
                            <th>Classificação Produto</th>
                            <th>Oferta</th>
                            <th>Tipo Dependente</th>
                            <th>Bonus</th>
                        </tr>
                    </thead>
                    <tbody id="dadosremoverProduto">
                        <?php
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
                            echo "</tr>";
                        ?>
                    </tbody>
                </table>
                <br><br>
                <button type="button" onclick="confirmaExcluir()">Remover</button>
                <a type="button" href="../index2.php?login=<?php echo $login; ?>">Voltar</a>
            </form>
    </body>
    <footer>
    </footer>
</html>