<?php


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
        if (mediaNota($notas) > 6) {
            return "Aprovado";
        }
        return "Reprovado";
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

?>