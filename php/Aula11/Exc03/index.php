<?php

require_once "Pessoa.php";
require_once "Endereco.php";
require_once "Contato.php";

$pai = new Pessoa("Carlos Alberto", "111.111.111-11", 45);
$mae = new Pessoa("Maria Clara", "222.222.222-22", 43);
$irmao = new Pessoa("João Pedro", "333.333.333-33", 18);
$voce = new Pessoa("Deivid", "444.444.444-44", 19);

$familia = [];
$familia[] = $pai;
$familia[] = $mae;
$familia[] = $irmao;
$familia[] = $voce;

$conteudo = "FAMÍLIA REGISTRADA\n\n";

foreach ($familia as $pessoa) {
    $conteudo .= "Nome: " . $pessoa->getNome() . "\n";
    $conteudo .= "CPF: " . $pessoa->getCpf() . "\n";
    $conteudo .= "Idade: " . $pessoa->getIdade() . "\n";
    $conteudo .= "---------------------------\n";
}

file_put_contents("familia.txt", $conteudo);

echo "Arquivo <strong>familia.txt</strong> salvo com sucesso!";
