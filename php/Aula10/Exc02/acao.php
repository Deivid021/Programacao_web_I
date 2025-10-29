<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    if(!isset($_COOKIE['usuario']) || !isset($_COOKIE['inicio'])){
        echo "Os dados de Cookies foram perdidos!";
        exit;
    }

    $usuario = $_COOKIE['usuario'];
    $inicio = $_COOKIE['inicio'];
    
    $_SESSION['fim'] = date("d/m/y H:i:s");
    $tempo_sessao = time() - $_SESSION['inicio_timestamp'];



    
echo "aqui";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra sessão</title>
</head>
<body>
    <h2>Informações da sessão</h2>
    <p>Login: <?= $_SESSION['user']?></p>
    <p>Senha: <?= $_SESSION['pass']?></p>
    <p>Data e Hora do Inicio da Sessão: <?= $_SESSION['inicio']?></p>
    <p>Data e Hora da Ultima Requisição: <?= $_SESSION['fim']?></p>
    <p>Tempo de Sessão: <?= $tempo_sessao ?> segundos</p>
</body>
</html>