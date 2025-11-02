<?php
require_once("conexao.php"); 
$dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
conecta();

$aDados = array($_POST['pesnome'],
                $_POST['pessobrenome'],
                $_POST['pesemail'],
                $_POST['pespassword'],
                $_POST['pescidade'],
                $_POST['pesestado']);

$result = pg_query_params($dbconn, "INSERT INTO TBPESSOA 
                                    (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                                    VALUES 
                                    ($1, $2, $3, $4, $5, $6)",
                                    $aDados);

// echo "Inserido com sucesso!";
header("Location: index.html");
