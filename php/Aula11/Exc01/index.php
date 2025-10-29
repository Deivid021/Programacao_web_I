<?php
$num1 = isset($_POST['num1']) ? $_POST['num1'] : 0; // breakpoint aqui
$num2 = isset($_POST['num2']) ? $_POST['num2'] : 0; // breakpoint aqui




function soma($num1, $num2){
    $resultado = $num1 + $num2;

    return $resultado;
}


echo "a soma é ". soma($num1, $num2); 
