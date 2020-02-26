function HabilitaCampos(login)
            {
                var Produto = document.getElementById("Produto").value;
                var Opcao = document.getElementById("Opcao").value;
                var log = login;
                if(Produto == "MOVEL")
                {
                    document.getElementById("ProdutosMovel").style.display = "inherit";
                    document.getElementById("ProdutosFixo").style.display = "none";
                    document.getElementById("ProdutosInternet").style.display = "none";
                    document.getElementById("ProdutosTv").style.display = "none";
                    document.getElementById("backupDadosMovel").style.display = "none";
                    if(Opcao == "INSERIR")
                    {
                        document.getElementById("AdicionarDadosMovel").style.display = "inherit";
                        document.getElementById("RemoverDadosMovel").style.display = "none";
                        document.getElementById("EditarDadosMovel").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                        document.getElementById("backupDadosMovel").style.display = "none";
                    }
                    else if (Opcao == "EDITAR")
                    {
                        document.getElementById("AdicionarDadosMovel").style.display = "none";
                        document.getElementById("RemoverDadosMovel").style.display = "none";
                        document.getElementById("EditarDadosMovel").style.display = "inherit";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                        document.getElementById("backupDadosMovel").style.display = "none";
                        VisualizarTabela("#dadosTabelaEditar", "sql/SqlTabelaProdutoMovel.php",Opcao,log);
                    }
                    else if (Opcao == "EXCLUIR")
                    {
                        document.getElementById("AdicionarDadosMovel").style.display = "none";
                        document.getElementById("RemoverDadosMovel").style.display = "inherit";
                        document.getElementById("EditarDadosMovel").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                        document.getElementById("backupDadosMovel").style.display = "none";
                        VisualizarTabela("#dadosTabelaRemover", "sql/SqlTabelaProdutoMovel.php",Opcao,log);
                    }
                    else if (Opcao == "IMPORTAR ARQUIVO")
                    {
                        document.getElementById("AdicionarDadosMovel").style.display = "none";
                        document.getElementById("RemoverDadosMovel").style.display = "none";
                        document.getElementById("EditarDadosMovel").style.display = "none";
                        document.getElementById("backupDadosMovel").style.display = "none";
                        document.getElementById("arquivo").style.display = "inherit";
                        document.getElementById("btImportar").style.display = "inherit";
                    }
                    else if (Opcao == "RECUPERAR BACKUP")
                    {
                        document.getElementById("AdicionarDadosMovel").style.display = "none";
                        document.getElementById("RemoverDadosMovel").style.display = "none";
                        document.getElementById("EditarDadosMovel").style.display = "none";
                        document.getElementById("backupDadosMovel").style.display = "inherit";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else
                    {
                        document.getElementById("AdicionarDadosMovel").style.display = "none";
                        document.getElementById("RemoverDadosMovel").style.display = "none";
                        document.getElementById("EditarDadosMovel").style.display = "none";
                        document.getElementById("backupDadosMovel").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                        
                    }
                }
                else if (Produto == "FIXO")
                {
                    document.getElementById("ProdutosMovel").style.display = "none";
                    document.getElementById("ProdutosFixo").style.display = "inherit";
                    document.getElementById("ProdutosInternet").style.display = "none";
                    document.getElementById("ProdutosTv").style.display = "none";
                    if(Opcao == "INSERIR")
                    {
                        document.getElementById("ImportarDadosFixo").style.display = "inherit";
                        document.getElementById("RemoverDadosFixo").style.display = "none";
                        document.getElementById("EditarDadosFixo").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "EDITAR")
                    {
                        document.getElementById("ImportarDadosFixo").style.display = "none";
                        document.getElementById("RemoverDadosFixo").style.display = "none";
                        document.getElementById("EditarDadosFixo").style.display = "inherit";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "EXCLUIR")
                    {
                        document.getElementById("ImportarDadosFixo").style.display = "none";
                        document.getElementById("RemoverDadosFixo").style.display = "inherit";
                        document.getElementById("EditarDadosFixo").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "IMPORTAR ARQUIVO")
                    {
                        document.getElementById("ImportarDadosFixo").style.display = "none";
                        document.getElementById("RemoverDadosFixo").style.display = "none";
                        document.getElementById("EditarDadosFixo").style.display = "none";
                        document.getElementById("arquivo").style.display = "inherit";
                        document.getElementById("btImportar").style.display = "inherit";
                    }
                    else
                    {
                        document.getElementById("ImportarDadosFixo").style.display = "none";
                        document.getElementById("RemoverDadosFixo").style.display = "none";
                        document.getElementById("EditarDadosFixo").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                }
                else if (Produto == "INTERNET")
                {
                    document.getElementById("ProdutosMovel").style.display = "none";
                    document.getElementById("ProdutosFixo").style.display = "none";
                    document.getElementById("ProdutosInternet").style.display = "inherit";
                    document.getElementById("ProdutosTv").style.display = "none";
                    if(Opcao == "INSERIR")
                    {
                        document.getElementById("ImportarDadosInternet").style.display = "inherit";
                        document.getElementById("RemoverDadosInternet").style.display = "none";
                        document.getElementById("EditarDadosInternet").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "EDITAR")
                    {
                        document.getElementById("ImportarDadosInternet").style.display = "none";
                        document.getElementById("RemoverDadosInternet").style.display = "none";
                        document.getElementById("EditarDadosInternet").style.display = "inherit";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "EXCLUIR")
                    {
                        document.getElementById("ImportarDadosInternet").style.display = "none";
                        document.getElementById("RemoverDadosInternet").style.display = "inherit";
                        document.getElementById("EditarDadosInternet").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "IMPORTAR ARQUIVO")
                    {
                        document.getElementById("ImportarDadosInternet").style.display = "none";
                        document.getElementById("RemoverDadosInternet").style.display = "none";
                        document.getElementById("EditarDadosInternet").style.display = "none";
                        document.getElementById("arquivo").style.display = "inherit";
                        document.getElementById("btImportar").style.display = "inherit";
                    }
                    else
                    {
                        document.getElementById("ImportarDadosInternet").style.display = "none";
                        document.getElementById("RemoverDadosInternet").style.display = "none";
                        document.getElementById("EditarDadosInternet").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                }
                else if (Produto == "TV")
                {
                    document.getElementById("ProdutosMovel").style.display = "none";
                    document.getElementById("ProdutosFixo").style.display = "none";
                    document.getElementById("ProdutosInternet").style.display = "none";
                    document.getElementById("ProdutosTv").style.display = "inherit";
                    if(Opcao == "INSERIR")
                    {
                        document.getElementById("ImportarDadosTv").style.display = "inherit";
                        document.getElementById("RemoverDadosTv").style.display = "none";
                        document.getElementById("EditarDadosTv").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "EDITAR")
                    {
                        document.getElementById("ImportarDadosTv").style.display = "none";
                        document.getElementById("RemoverDadosTv").style.display = "none";
                        document.getElementById("EditarDadosTv").style.display = "inherit";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "EXCLUIR")
                    {
                        document.getElementById("ImportarDadosTv").style.display = "none";
                        document.getElementById("RemoverDadosTv").style.display = "inherit";
                        document.getElementById("EditarDadosTv").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                    else if (Opcao == "IMPORTAR ARQUIVO")
                    {
                        document.getElementById("ImportarDadosTv").style.display = "none";
                        document.getElementById("RemoverDadosTv").style.display = "none";
                        document.getElementById("EditarDadosTv").style.display = "none";
                        document.getElementById("arquivo").style.display = "inherit";
                        document.getElementById("btImportar").style.display = "inherit";
                    }
                    else
                    {
                        document.getElementById("ImportarDadosTv").style.display = "none";
                        document.getElementById("RemoverDadosTv").style.display = "none";
                        document.getElementById("EditarDadosTv").style.display = "none";
                        document.getElementById("arquivo").style.display = "none";
                        document.getElementById("btImportar").style.display = "none";
                    }
                }
                else
                {
                    document.getElementById("ProdutosMovel").style.display = "none";
                    document.getElementById("ProdutosFixo").style.display = "none";
                    document.getElementById("ProdutosInternet").style.display = "none";
                    document.getElementById("ProdutosTv").style.display = "none";
                    document.getElementById("arquivo").style.display = "none";
                    document.getElementById("btImportar").style.display = "none";
                }
            }

            function VisualizarTabela(table, arq, op,log){
                    var tabela = table;
                    var arquivo = arq;
                    var opcao = op;
                    var login = log;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.querySelector(tabela).innerHTML = this.responseText;
                        }
                    };
                    console.log(arquivo+"?opcao="+opcao+"&login="+login);
                    xhttp.open("GET", arquivo+"?opcao="+opcao+"&login="+login, true);
                    xhttp.send();
            };

            function ValidacaoUpload() {
                var produto = document.getElementById("Produto").value; 
                var anexo1 = document.getElementById("arquivo").value;
                if(anexo1 == "") {
                    alert("É PRECISO INSERIR UM ARQUIVO!");
                } else {
                    var ponto_arq = anexo1.lastIndexOf(".");
                    var tam_arq = anexo1.length;
                    var ext_arq = anexo1.substring(ponto_arq+1, tam_arq);
                    
                    if(ext_arq != "csv" && ext_arq != "xls" && ext_arq != "xlsx") {
                        alert("O arquivo tem que ser na seguinte extensão: CSV.");
                    } else {
                        document.getElementById('formulario').submit();
                    }
                }
            }

            
            function filtrarProduto(table)
            {
                var tabela = "#"+table;
                var inputKeyup = tabela+" input";
                var inputnth = tabela+" td:nth-child";
                var inputshow = tabela+" tbody tr";
            $(function()
            {
                $(inputKeyup).keyup(function()
                {
                    var index = $(this).parent().index();
                    var nth = inputnth+"("+(index+1).toString()+")";
                    var valor = $(this).val().toUpperCase();
                    $(inputshow).show();
                    $(nth).each(function()
                    {
                        if($(this).text().toUpperCase().indexOf(valor) < 0)
                        {
                            $(this).parent().hide();
                        }
                    });
                });
                /*$(inputKeyup).blur(function()
                {
                    $(this).val("");
                });*/
            });
            }


            