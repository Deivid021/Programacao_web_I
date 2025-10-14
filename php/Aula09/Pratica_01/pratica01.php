<?php
require_once("funcoes.php");

    $notas = array(5, 7, 7);
    $frequencia = array(1, 0, 1, 1, 1, 1, 0, 1);

    echo "Média das notas é: " . mediaNota($notas);
    echo '<br>';
    echo "Situação: " . validaAprovacao($notas);
    echo '<br>';
    echo "Frequencia do Aluno: " . calculaFrequencia($frequencia) . "%";  
    echo '<br>';
    echo "Situação por Frequencia: " . validaAprovacaoFrequencia($frequencia);  
?>