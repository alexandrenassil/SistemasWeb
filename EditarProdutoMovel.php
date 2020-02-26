<?php
    session_start();
    
    require '../conexao.php';
    
    $id = $_POST['id'];
    $login = $_POST['login'];
    $Select = 'SELECT [ID],[MAILING],[TIPO_VENDA],[VENDA_APARELHO],[NET_MOVEL],[QTD_DEPENDENTES],[CLASSIFICACAO_PRODUTO],[OFERTA],[TIPO_DEPENDENTE],[BONUS] FROM [NOME DO BANCO].[dbo].[NOME DA BASE] WHERE ID = '.$id;
    $Script = mssql_query($Select);
    $dados = mssql_fetch_array($Script);
    $mailing = utf8_encode($dados['MAILING']);
    $tipoVenda = utf8_encode($dados['TIPO_VENDA']);
    $vendaAparelho = utf8_encode($dados['VENDA_APARELHO']);
    $netMovel = utf8_encode($dados['NET_MOVEL']);
    $qtdDep = utf8_encode($dados['QTD_DEPENDENTES']);
    $classificacaoProduto = utf8_encode($dados['CLASSIFICACAO_PRODUTO']);
    $oferta = utf8_encode($dados['OFERTA']);
    $tipoDependente = utf8_encode($dados['TIPO_DEPENDENTE']);
    $bonus = $dados['BONUS'];
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,text/html;charset=utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Combo Multi - Equipamentos</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../css/menu.css" rel="stylesheet">

        <style>
            body.center-form {
                min-height: 100vh;
            }

            div.center-form {
                position: relative;
                min-height: 100vh;
            }

            div.center-form > form {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translateY(-50%) translateX(-50%);
            }
        </style>
        <script>
            function confirmaEditar()
            {
                var x;
                var mailing = "<?php echo $mailing; ?>";
                var tipoVenda = "<?php echo $tipoVenda; ?>";
                var vendaAparelho = "<?php echo $vendaAparelho; ?>";
                var netMovel = "<?php echo $netMovel; ?>";
                var qtdDep = "<?php echo $qtdDep; ?>";
                var classificacaoProduto = "<?php echo $classificacaoProduto; ?>";
                var oferta = "<?php echo $oferta; ?>";
                var tipoDependente = "<?php echo $tipoDependente; ?>";
                var bonus = "<?php echo str_replace("\r\n","",$bonus) ;?>";
                var msg = "Você deseja efetuar as seguintes alterações?\n\n";
        
                if(mailing != document.getElementById('Mailing').value)
                {
                    msg += "Mailing -> De: "+mailing+" Para: "+document.getElementById('Mailing').value+"\n";
                }
                if(tipoVenda != document.getElementById('TipoVenda').value)
                {
                    msg += "Tipo Venda -> De: "+tipoVenda+" Para: "+document.getElementById('TipoVenda').value+"\n";
                }
                if(vendaAparelho != document.getElementById('VendaAparelho').value)
                {
                    msg += "Venda Aparelho -> De: "+vendaAparelho+" Para: "+document.getElementById('VendaAparelho').value+"\n";
                }
                if(netMovel != document.getElementById('NetMovel').value)
                {
                    msg += "Net Movel -> De: "+netMovel+" Para: "+document.getElementById('NetMovel').value+"\n";
                }
                if(qtdDep != document.getElementById('QtdDep').value)
                {
                    msg += "Qtd. Dependentes -> De: "+qtdDep+" Para: "+document.getElementById('QtdDep').value+"\n";
                }
                if(classificacaoProduto != document.getElementById('ClassificProduto').value)
                {
                    msg += "Classificacao Produto -> De: "+classificacaoProduto+" Para: "+document.getElementById('ClassificProduto').value+"\n";
                }
                if(oferta != document.getElementById('Oferta').value)
                {
                    msg += "Oferta -> De: "+oferta+" Para: "+document.getElementById('Oferta').value+"\n";
                }
                if(tipoDependente != document.getElementById('TipoDependente').value)
                {
                    msg += "Tipo Dependente -> De: "+tipoDependente+" Para: "+document.getElementById('TipoDependente').value+"\n";
                }
                if(bonus != document.getElementById('Bonus').value)
                {
                    msg += "Bonus -> De: "+bonus+" Para: "+document.getElementById('Bonus').value+"\n";
                }
        
                //alert(msg);
                var r=confirm(msg);
                if (r==true)
                {
                    document.getElementById('formEditar').submit();
                }        
            }
        </script>
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">
                <img src="../img/Motiva_Logo.png" width="175" height="40" class="d-inline-block align-top" alt="">
            </a>
            <a class="navbar-brand">
                <img src="../img/Claro_Logo.png" width="50" height="50" class="d-inline-block align-right" alt="">
            </a>
    </nav>
  
    <section class="jumbotron text-center">
            <h2 class="jumbotron-heading">Editar Produto Movel - Combo Multi</h2>
            <br>
            <form method="post" action="../sql/sqlUpdateEditarProduto.php" id="formEditar" name="formEditar">
                <input type="hidden" value="<?php echo $login; ?>" name="login" id="login" readonly="true">
                <div class="col-sm-6 col-xs-12 col-md-6"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">id:</span>
                        </div>
                        <input type="text" class="form-control" Readonly="true" id="id" name="id" value="<?php echo $id;?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Mailing:</span>
                        </div>
                        <input type="text" class="form-control" id="Mailing" name="Mailing" value="<?php echo $mailing;?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tipo Venda:</span>
                        </div>
                        <select class="form-control" id="TipoVenda" name="TipoVenda">
                            <option value='<?php echo $tipoVenda;?>'><?php echo $tipoVenda;?></option>
                            <option value='COMPLETO (VOZ + DADOS)'>COMPLETO (VOZ + DADOS)</option>
                            <option value='DEPENDENTE AVULSO'>DEPENDENTE AVULSO</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Venda Aparelho:</span>
                        </div>
                        <select class="form-control" id="VendaAparelho" name="VendaAparelho">
                            <option value='<?php echo $vendaAparelho;?>'><?php echo $vendaAparelho;?></option>
                            <option value='SIM'>SIM</option>
                            <option value='NÃO'>NÃO</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Net Movel:</span>
                        </div>
                        <input type="text"  class="form-control" id="NetMovel" name="NetMovel" value="<?php echo $netMovel;?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Qtd Dep:</span>
                        </div>
                        <select class="form-control" id="QtdDep" name="QtdDep">
                            <option value='<?php echo $qtdDep;?>'><?php echo $qtdDep;?></option>
                            <option value='0'>0</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Classificação Produto:</span>
                        </div>
                        <select class="form-control" id="ClassificProduto" name="ClassificProduto">
                            <option value='<?php echo $classificacaoProduto;?>'><?php echo $classificacaoProduto;?></option>
                            <option value='MIGRAÇÃO'>MIGRAÇÃO</option>
                            <option value='NOVO NÚMERO'>NOVO NÚMERO</option>
                            <option value='PORTABILIDADE'>PORTABILIDADE</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Oferta:</span>
                        </div>
                        <input type="text"  class="form-control" id="Oferta" name="Oferta" value="<?php echo $oferta;?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tipo Dependente:</span>
                        </div>
                        <input type="text"  class="form-control" id="TipoDependente" name="TipoDependente" value="<?php echo $tipoDependente;?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Bonus:</span>
                        </div>
                        <input type="text"  class="form-control" id="Bonus" name="Bonus" value="<?php echo $bonus;?>">
                    </div>
                </div>

            <div class="col-sm-6 col-xs-12 col-md-3">
                <div class="input-group mb-3">
                    <button type="button" class="btn btn-inverse" name="btSalvarEditar" id="btSalvarEditar" onclick="confirmaEditar()">Salvar</button>
            </form>
                    <a class="btn btn-inverse" name="btCancelar" id="btCancelar" href="../index2.php?login=<?php echo $login;?>">Cancelar</a>
                </div>
            </div>
       
    </section>
        <script src="../js/javascript.js"> </script>
        <script src="../js/jquery-3.2.1.min.js"> </script>
        <script src="../js/popper.min.js"> </script>
        <script src="../js/bootstrap.min.js"> </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../script/vendor/jquery-slim.min.js"><\/script>')</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    </body>
    <footer></footer>
</html>