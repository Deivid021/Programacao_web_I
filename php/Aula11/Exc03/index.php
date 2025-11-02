<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dados = [
        'pesnome'       => $_POST['pesnome'],
        'pessobrenome'  => $_POST['pessobrenome'],
        'pesemail'      => $_POST['pesemail'],
        'pespassword'   => $_POST['pespassword'],
        'pescidade'     => $_POST['pescidade'],
        'pesestado'     => $_POST['pesestado'],
        'data_envio'    => date('Y-m-d H:i:s')
    ];

    $arquivo = 'Aula11\Exc03\pessoas.json';

    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        $lista = json_decode($conteudo, true);
        if (!is_array($lista)) {
            $lista = [];
        }
    } else {
        $lista = [];
    }

    $lista[] = $dados;

    file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT));

    echo "Pessoa salva com sucesso!";
    echo "<br><a href='index.html'>Voltar</a>";
} else {
    echo "Nenhum dado recebido.";
}