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





<!-- Crie um programa que calcule a área de um retângulo. Você deve configurar duas
variáveis que representam os lados a e bdesse quadrado em metros. Após o cálculo
escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de
lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase
usando a tag h1, se não, escrever com h3. -->