<?php

    $salario01 = 1000;
    $salario02 = 2000;

    $salario02 = $salario01;

    $salario02++;

    $salario01 *= 1.1;

    if ($salario01 > $salario02) {
        echo "o salario 01 é maior que o salario 02";
    } elseif ($salario01 < $salario02) {
        echo "o salario 02 é maior que o salario 01";
    } else {
        echo "os valores são iguais";
    }

    echo "<br>";

    for ($i=0; $i <= 100; $i++) {
        if ($i == 50) {
        break;
        }
        $salario01 += $i;
    }

    if ($salario01 < $salario02) {
        echo "Salario 01: $salario01";
    }

?>