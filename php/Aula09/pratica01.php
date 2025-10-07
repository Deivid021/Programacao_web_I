<?php

    $notas = array(5, 7, 7);
    $frequencia = array(1, 0, 1, 1, 1, 1, 0, 1);

    function mediaNota($notas) {
        $sum = 0;
        foreach ($notas as $sumNota) {
            $sum += $sumNota;
        }
        return $sum / count($notas);
    }

    /**
     * Retorna se a pessoa foi aprovado ou não
     * @param integer $notas
     * @return string
     */
    function validaAprovacao($notas) {
        // if (mediaNota($notas) > 6) {
        //     return "Aprovado";
        // }
        // return "Reprovado";

        return $texto = mediaNota($notas) > 7 ? "Aprovado" : "Reprovado";
        // return $texto;
    }

    function calculaFrequencia($frequencia) {
        $sum = 0;
        foreach ($frequencia as $dias) {
            $sum += $dias;
        }
        return $sum / count($frequencia) * 100;
    }

    function validaAprovacaoFrequencia($frequencia) {
        return $texto = calculaFrequencia($frequencia) > 70 ? "Aprovado" : "Reprovado";
    }

    echo "Média das notas é: " . mediaNota($notas);
    echo '<br>';
    echo "Situação: " . validaAprovacao($notas);
    echo '<br>';
    echo "Frequencia do Aluno: " . calculaFrequencia($frequencia) . "%";  
    echo '<br>';
    echo "Situação por Frequencia: " . validaAprovacaoFrequencia($frequencia);  
?>