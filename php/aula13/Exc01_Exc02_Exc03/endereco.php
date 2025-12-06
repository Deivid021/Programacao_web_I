<?php

class Endereco
{
    private $rua;
    private $cidade;
    private $estado;

    public function __construct($rua = "", $cidade = "", $estado = "")
    {
        $this->rua = $rua;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    // GETTERS
    public function getRua()      { return $this->rua; }
    public function getCidade()   { return $this->cidade; }
    public function getEstado()   { return $this->estado; }

    // SETTERS
    public function setRua($rua)        { $this->rua = $rua; }
    public function setCidade($cidade)  { $this->cidade = $cidade; }
    public function setEstado($estado)  { $this->estado = $estado; }

    public function toJson() {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}
