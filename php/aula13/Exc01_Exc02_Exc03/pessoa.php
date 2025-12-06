<?php

require_once "Endereco.php";
require_once "Contato.php";

class Pessoa
{
    private $nome;
    private $cpf;
    private $idade;

    private $endereco; // objeto Endereco
    private $contato;  // objeto Contato

    public function __construct($nome = "", $cpf = "", $idade = 0)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

    // GETTERS
    public function getNome() { return $this->nome; }
    public function getCpf()  { return $this->cpf; }
    public function getIdade(){ return $this->idade; }

    public function getEndereco() { return $this->endereco; }
    public function getContato()  { return $this->contato; }

    // SETTERS
    public function setNome($nome)     { $this->nome = $nome; }
    public function setCpf($cpf)       { $this->cpf = $cpf; }
    public function setIdade($idade)   { $this->idade = $idade; }

    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

    public function setContato(Contato $contato)
    {
        $this->contato = $contato;
    }

    public function toJson() {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}
