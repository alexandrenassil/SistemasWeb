<?php
$login=$_GET['login'];
?>

<script>
    function downloadBackup()
    {
        var arquivo = document.getElementById('BackUp').value;
        var linkPage = "http://10.100.0.000/desenvolvimento/projetos/anexos/"+arquivo;
        window.location.href = linkPage;
    }
</script>
<section class="jumbotron text-center">
    <form method="post" name="formBackup" id="formBackup" action="form/form_rollback.php">
    <input type="hidden" value="<?php echo $login?>" name="login" id="login" readonly="true">
        <div class="row">
            <div class="col-sm-6 col-xs-12 col-md-3"> 
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">BackUp:</span>
                    </div>
                    <select class="form-control" id="BackUp" name="BackUp">
                        <option value='SELECIONE:'>SELECIONE:</option>
                        <?php
                            ini_set('error_reporting', E_ALL);
                            ini_set('log_errors' , TRUE);
                            ini_set('html_errors' , TRUE);
                            ini_set('display_errors' , TRUE);
                            
                            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                            date_default_timezone_set('America/Sao_Paulo');
                            $path = "anexos/";
                            $dir = dir($path);
                            
                            //Cria um array com os arquivos anexados
                            while($arquivo = $dir -> read())
                            {
                                if($arquivo != '..' && $arquivo != '.')
                                {
                                    $arrayArquivos[date('Y/m/d H:i:s', filemtime($path.$arquivo))] = $arquivo;
                                }
                            }
                            $dir -> close();
                            ksort($arrayArquivos, SORT_STRING); //Organiza o array em ordem de data de importação
                            print_r($arrayArquivos);
                            foreach($arrayArquivos as $chave => $value) //Imprime os arquivos no options do combobox de backup
                            {
                                echo "<option value='".$value."'>".$value."</option>";
                            }   
                           /*$arrayKey = array_keys($arrayArquivos); //Cria um array com as chaves do array dos arquivos
                            foreach($arrayKey as $dados => $value) //Imprime os arquivos no options do combo
                            {
                                echo "<option value='".$arrayArquivos[$value]."'>".$arrayArquivos[$value]."</option>";
                            }*/             
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 col-md-3">
                <div class="input-group mb-3">
                    <button type="button" value="1" class="btn btn-inverse" name="btDownloadbackupMovel" id="btDownloadbackupMovel" onclick="downloadBackup()">Download</button>
                    <p>&nbsp;&nbsp</p>
                    <button type="submit" value="1" class="btn btn-inverse" name="btRollBackbackupMovel" id="btRollBackbackupMovel">RollBack</button>
                </div>
            </div>
        </div>  
    </form>
</section>
</html>