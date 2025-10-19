<?php

$num01 = $_POST['num01'];
$num02 = $_POST['num02'];
$num03 = $_POST['num03'];

    function soma($num01, $num02, $num03) {
        return $num01 + $num02 + $num03;
    }

    if($num01 > 10) {
        echo "<h1 style='color: blue;'> Resultado é " . soma($num01, $num02, $num03) . "</h1>";
    }
    else if($num02 < $num03) {
        echo "<h1 style='color: green;'> Resultado é " . soma($num01, $num02, $num03) . "</h1>";
    }
    else if($num03 < $num01 and $num03 < $num02) {
        echo "<h1 style='color: red;'> Resultado é " . soma($num01, $num02, $num03) . "</h1>";
    }
    else { 
        echo "<h1'> Resultado é " . soma($num01, $num02, $num03) . "</h1>";
    }

?>


<!-- Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o
resultado em vermelho -->