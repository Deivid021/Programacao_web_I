<?php

    $base = $_POST['base'];
    $altura = $_POST['altura'];

    function calculaTriangulo($base, $altura) {
        $area = ($base * $altura);
        return $area;
    }

    $triangulo = calculaTriangulo($base, $altura);
    if ($triangulo > 10) {
        echo "<h1>A área do retângulo de base ". $base ." e altura ". $altura. " é de ". $triangulo. " metros quadrados.</h1>";
    }
    else {
        echo "<h3>A área do retângulo de base ". $base ." e altura ". $altura. " é de ". $triangulo. " metros quadrados.</h3>";
    }
    
?>