<?php
    require 'conexao.php';
    $Produto = $_POST['Produto'];
    $Produto = "MOVEL";
    $arquivo = 'Produto'.$Produto.'.xls';
    
    $tabela = '<table border="1">
    <tr>
    <td colspan="2">Tabela de Produtos - '.$Produto.'</tr>
    </tr>
    <tr>
    <td><b>MAILING</b></td>
    <td><b>TIPO_VENDA</b></td>
    <td><b>VENDA_APARELHO</b></td>
    <td><b>NET_MOVEL</b></td>
    <td><b>QTD_DEPENDENTES</b></td>
    <td><b>CLASSIFICACAO_PRODUTO</b></td>
    <td><b>OFERTA</b></td>
    <td><b>TIPO_DEPENDENTE</b></td>
    <td><b>BONUS</b></td>
    </tr>';

    $Script = "SELECT
        [MAILING],
        [TIPO_VENDA],
        [VENDA_APARELHO],
        [NET_MOVEL],
        [QTD_DEPENDENTES],
        [CLASSIFICACAO_PRODUTO],
        [OFERTA],
        [TIPO_DEPENDENTE],
        [BONUS]
        FROM
        [NOME DO BANCO].[dbo].[NOME DA BASE]";
        
        $resultado = mssql_query($Script);
    
    while($dados = mssql_fetch_array($resultado))
    {
        $tabela .= '<tr>
        <td>'.$dados['MAILING'].'</td>
        <td>'.$dados['TIPO_VENDA'].'</td>
        <td>'.$dados['VENDA_APARELHO'].'</td>
        <td>'.$dados['NET_MOVEL'].'</td>
        <td>'.$dados['QTD_DEPENDENTES'].'</td>
        <td>'.$dados['CLASSIFICACAO_PRODUTO'].'</td>
        <td>'.$dados['OFERTA'].'</td>
        <td>'.$dados['TIPO_DEPENDENTE'].'</td>
        <td>'.$dados['BONUS'].'</td>
        </tr>';
    }

    $tabela .= '</table>';
    header ('Cache-Control: no-cache, must-revalidate');
    header ('Pragma: no-cache');
    header ('Content-Type: application/x-msexcel');
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");

    echo $tabela;
?>
