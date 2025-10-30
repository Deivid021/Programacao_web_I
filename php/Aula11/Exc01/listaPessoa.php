<?php
require_once("conexao.php");

function listarPessoas() {
    $dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");

    if (!$dbconn) {
        die("Erro ao conectar ao banco de dados.");
    }

    $query = "SELECT pescodigo, pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado FROM TBPESSOA;";
    $result = pg_query($dbconn, $query);

    if (!$result) {
        die("Erro na consulta ao banco.");
    }

    $pessoas = [];

    while ($row = pg_fetch_assoc($result)) {
        $pessoas[] = $row;
    }

    pg_close($dbconn);

    return $pessoas;
}
?>
