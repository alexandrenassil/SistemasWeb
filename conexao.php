<?php

$conector = mssql_connect("10.100.0.000", "usuario", "senha") or die("NÃO FOI POSSÍVEL A CONEXÃO COM O SERVIDOR");
$conn = mssql_select_db("nome do banco", $conector) or die("NÃO FOI POSSÍVEL SELECIONAR O BANCO DE DADOS");

?>