<?php

    $base = $_POST['base'];
    $altura = $_POST['altura'];

    function calculaTrianguloRetangulo($base, $altura) {
        $area = ($base * $altura) / 2;
        return $area;
    }

    $tr = calculaTrianguloRetangulo($base, $altura);
    echo "<h2>A área do Triangulo Retângulo de base ". $base ." e altura ". $altura. " é de ". $tr. " metros quadrados.</h2>";
    
?>



<!-- Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue
abaixo. Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase
com o valor da operação.

Fórmula -> Resultado = (Base * Altura) / 2 -->