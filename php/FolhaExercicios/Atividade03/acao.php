<?php

    $lado = $_POST['lado'];

    function calculaQuadrado($lado) {
        return $area = $lado * $lado;
    }

    $quadrado = calculaQuadrado($lado);
    echo "A área do quadrado de lado " . $lado . " metros é de " . $quadrado . " metros quadrados";

?>