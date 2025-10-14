<?php

    $numero = $_POST['numero'];

    function validaDivisao($num) {
        if($num % 2 == 0) {
            return "Valor divisível por 2";
        }
        return "O valor não é divisível por 2";
    }

    $inicia = validaDivisao($numero);
    echo $inicia;
?>