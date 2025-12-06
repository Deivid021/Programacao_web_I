<?php

require_once "Pessoa.php";
require_once "Endereco.php";
require_once "Contato.php";

/* instanciar pessoa + endereço + ecntato */

$pessoa = new Pessoa("Deivid Sestren", "444.444.444-44", 19);

$end = new Endereco("Rua Central", 120, "Rio do Sul");
$cont = new Contato("99999-9999", "deivid@email.com");

$pessoa->setEndereco($end);
$pessoa->setContato($cont);

echo "<h2>Exercício 1 OK</h2>";

/* criar instâncias da família + salvar TXT */

$pai = new Pessoa("Carlos Alberto", "111.111.111-11", 45);
$mae = new Pessoa("Maria Clara", "222.222.222-22", 43);
$irmao = new Pessoa("João Pedro", "333.333.333-33", 18);

$familia = [ $pai, $mae, $irmao, $pessoa ];

$conteudo = "FAMÍLIA REGISTRADA\n\n";
foreach ($familia as $p) {
    $conteudo .= "Nome: " . $p->getNome() . "\n";
    $conteudo .= "CPF: " . $p->getCpf() . "\n";
    $conteudo .= "Idade: " . $p->getIdade() . "\n";
    $conteudo .= "-------------------------\n";
}

file_put_contents("familia.txt", $conteudo);

echo "<h2>Exercício 2 OK (arquivo familia.txt gerado)</h2>";

/* criar método toJson() e salvar JSON  */

foreach ($familia as $pessoaJSON) {
    $nomeLimpo = str_replace(" ", "_", strtolower($pessoaJSON->getNome()));
    file_put_contents("{$nomeLimpo}.json", $pessoaJSON->toJson());
}

echo "<h2>Exercício 3 OK (arquivos .json gerados)</h2>";

?>
