<?php

    function incluiDesconto() {

        if(!isset($_REQUEST['valor']) || !isset($_REQUEST['desconto'])) {
            throw new Exception("Parâmetros 'valor' ou 'desconto' são obrigatórios");
        } 

        $t = $_REQUEST['valor'];
        $d = $_REQUEST['desconto'];
        
        if ($t < 0 || $d < 0) {
            throw new Exception("Números negativos não são válidos!");
        }
        
        $valortotal = $t - ($t * ($d / 100));
        return $valortotal;
    } 
    
    $valor = incluiDesconto();
    echo "Valor com desconto: " . $valor;
?>  