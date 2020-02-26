<?php
    $login = $_GET['login'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Combo Multi - Equipamentos</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/menu.css" rel="stylesheet">
        <link href="css/table.css" rel="stylesheet">
        <script>
            function Load()
            {
               HabilitaCampos();
               //downloadBackup();
            }
            
        </script>
    </head>
    <body onload="Load()">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">
                <img src="img/Motiva_Logo.png" width="175" height="40" class="d-inline-block align-top" alt="">
            </a>
            <a class="navbar-brand">
                <img src="img/Claro_Logo.png" width="50" height="50" class="d-inline-block align-right" alt="">
            </a>
            <a class="d-inline-block align-left" width="175" height="40" href="index.php">Sair</a>
        </nav>
        <section class="jumbotron text-center">
            <h2 class="jumbotron-heading">Inserir Novo Produto - Combo Multi</h2>
            <br>
            <form method="post" name="formulario" id="formulario" action="ImportarPlanilha2.php" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $login?>" name="login" id="login" readonly="true">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 col-md-3"> 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Produto:</span>
                            </div>
                            <select class="form-control" id="Produto" name="Produto" onchange="HabilitaCampos('<?php echo $login;?>')">
                                <option value='SELECIONE:'>SELECIONE:</option>
                              <!--  <option value='FIXO'>FIXO</option> -->
                                <option value='MOVEL'>MOVEL</option>
                              <!--  <option value='INTERNET'>INTERNET</option> -->
                              <!--  <option value='TV'>TV</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-3"> 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Opção:</span>
                            </div>
                            <select class="form-control" id="Opcao" name="Opcao" onchange="HabilitaCampos('<?php echo $login;?>')">
                                <option value='SELECIONE:'>SELECIONE:</option>
                                <option value='EDITAR'>EDITAR</option>
                                <option value='INSERIR'>INSERIR</option>
                                <option value='EXCLUIR'>EXCLUIR</option>
                                <option value='IMPORTAR ARQUIVO'>IMPORTAR ARQUIVO</option>
                                <option value='RECUPERAR BACKUP'>RECUPERAR BACKUP</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 col-md-3"> 
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <input  type="file" class="input-file" name="arquivo" id="arquivo">
                                <input type="button" value = "Importar" name="btImportar" id="btImportar" onclick="ValidacaoUpload()">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-md-3"> 
                    <div class="input-group mb-3">
                        <a href="ExportarProdutos.php?Produto="+document.getElementById('Produto').value>Exportar</a>
                    </div>
                </div>
            </div>
            <hr color="#FFFFFF">

            <!-- Produtos Movel -->
            <div name="ProdutosMovel" id="ProdutosMovel">
                <div name="AdicionarDadosMovel" id="AdicionarDadosMovel">
                    <?php include "form/InserirProdutoMovel.php";?>
                </div>
                <div name="backupDadosMovel" id="backupDadosMovel">
                    <?php include "form/form_listarbackup.php";?>
                </div>
                <div name="RemoverDadosMovel" id="RemoverDadosMovel">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" name="tabelaRemover" id="tabelaRemover" metod="get"  font-size="1rem">
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
                                    <th>Selecionar</th>
                                </tr>
                                <tr>
                                    <th><input class="form-control" id="excluirIndice" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirMailing" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirTipoVenda" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirVendaAparelho" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirNetMovel" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirQtdDep" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirClassificacaoProduto" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirOferta" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirTipoDep" type="text" onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th><input class="form-control" id="excluirBonus" type="text"  onchange="filtrarProduto('tabelaRemover')"></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="dadosTabelaRemover"></tbody>
                        </table>
                    </div>
                </div>
                <div name="EditarDadosMovel" id="EditarDadosMovel">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" name="tabelaEditar" id="tabelaEditar" metod="get"  font-size="1rem">
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
                                    <th>Selecionar</th>
                                </tr>
                                <tr>
                                    <th><input class="form-control" id="editarIndice" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarMailing" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarTipoVenda" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarVendaAparelho" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarNetMovel" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarQtdDep" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarClassificacaoProduto" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarOferta" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarTipoDep" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th><input class="form-control" id="editarBonus" type="text" onchange="filtrarProduto('tabelaEditar')"></th>
                                    <th></th>
                                </tr>                            
                            </thead>
                            <tbody id="dadosTabelaEditar"></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Produtos Fixo -->
            <div name="ProdutosFixo" id="ProdutosFixo">
                <div name="ImportarDadosFixo" id="ImportarDadosFixo">
                    <?php include "form/InserirProdutoFixo.php"; ?>
                </div>
                <div name="RemoverDadosFixo" id="RemoverDadosFixo">
                    <?php include "Fixo/RemoverProdutoFixo.php"; ?>
                </div>
                <div name="EditarDadosFixo" id="EditarDadosFixo">
                    <?php include "form/EditarProdutoFixo.php"; ?>
                </div>
            </div>

            <!-- Produtos Internet -->
            <div name="ProdutosInternet" id="ProdutosInternet">
                <div name="ImportarDadosInternet" id="ImportarDadosInternet">
                    <?php include "form/InserirProdutoInternet.php"; ?>
                </div>
                <div name="RemoverDadosInternet" id="RemoverDadosInternet">
                    <?php include "Internet/RemoverProdutoInternet.php"; ?>
                </div>
                <div name="EditarDadosInternet" id="EditarDadosInternet">
                    <?php include "form/EditarProdutoInternet.php"; ?>
                </div>
            </div>

            <!-- Produtos Tv -->
            <div name="ProdutosTv" id="ProdutosTv">
                <div name="ImportarDadosTv" id="ImportarDadosTv">
                    <?php include "form/InserirProdutoTv.php"; ?>
                </div>
                <div name="RemoverDadosTv" id="RemoverDadosTv">
                    <?php include "Tv/RemoverProdutoTv.php"; ?>
                </div>
                <div name="EditarDadosTv" id="EditarDadosTv">
                    <?php include "form/EditarProdutoTv.php"; ?>
                </div>
            </div>

        </section>

        <script src="js/javascript.js"> </script>
        <script src="js/jquery-3.2.1.min.js"> </script>
        <script src="js/popper.min.js"> </script>
        <script src="js/bootstrap.min.js"> </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../script/vendor/jquery-slim.min.js"><\/script>')</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script>

            
               
               
        </script>
    </body>
    <footer>

    </footer>
</html>
