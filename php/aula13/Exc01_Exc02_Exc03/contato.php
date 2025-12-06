<?php

class Contato
{
    private $telefone;
    private $email;

    public function __construct($telefone = "", $email = "")
    {
        $this->telefone = $telefone;
        $this->email = $email;
    }

    // GETTERS
    public function getTelefone() { return $this->telefone; }
    public function getEmail()    { return $this->email; }

    // SETTERS
    public function setTelefone($telefone) { $this->telefone = $telefone; }
    public function setEmail($email)       { $this->email = $email; }

    public function toJson() {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}
