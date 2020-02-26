<section class="jumbotron text-center">
<form method="post" action="sql/sqlInsertProdutoMovel.php">
<input type="hidden" value="<?php echo $login?>" name="login" id="login" readonly="true">
    <div class="row">
        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Mailing:</span>
                </div>
                <input type="text" class="form-control" id="Mailing" name="Mailing" required>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Tipo Venda:</span>
                </div>
                <select class="form-control" id="TipoVenda" name="TipoVenda" required>
                    <option value='SELECIONE:'>SELECIONE:</option>
                    <option value='COMPLETO (VOZ + DADOS)'>COMPLETO (VOZ + DADOS)</option>
                    <option value='DEPENDENTE AVULSO'>DEPENDENTE AVULSO</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Venda Aparelho:</span>
                </div>
                <select class="form-control" id="VendaAparelho" name="VendaAparelho" required>
                    <option value='SELECIONE:'>SELECIONE:</option>
                    <option value='SIM'>SIM</option>
                    <option value='NÃO'>NÃO</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Net Movel:</span>
                </div>
                <input type="text"  class="form-control" id="NetMovel" name="NetMovel" required>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Qtd Dep:</span>
                </div>
                <select class="form-control" id="QtdDep" name="QtdDep" required>
                    <option value='SELECIONE:'>SELECIONE:</option>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Classificação Produto:</span>
                </div>
                <select class="form-control" id="ClassificProduto" name="ClassificProduto" required>
                    <option value='SELECIONE:'>SELECIONE:</option>
                    <option value='MIGRAÇÃO'>MIGRAÇÃO</option>
                    <option value='NOVO NÚMERO'>NOVO NÚMERO</option>
                    <option value='PORTABILIDADE'>PORTABILIDADE</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Oferta:</span>
                </div>
                <input type="text"  class="form-control" id="Oferta" name="Oferta" required>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Tipo Dependente:</span>
                </div>
                <input type="text"  class="form-control" id="TipoDependente" name="TipoDependente" required>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12 col-md-3"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Bonus:</span>
                </div>
                <input type="text"  class="form-control" id="Bonus" name="Bonus" required>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xs-12 col-md-3">
        <div class="input-group mb-3">
            <button type="submit" class="btn btn-inverse" name="btSalvarImportMovel" id="btSalvarImportMovel">Salvar</button>
        </div>
    </div>
    </form>
</section>