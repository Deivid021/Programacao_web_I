<?php

    $valorAvista = $_POST['vista'];
    $qtdParcela = $_POST['parcela'];
    $valorParcela = $_POST['valorparcela'];

    function calculaJuros($valorAvista, $qtdParcela, $valorParcela) {
            $juros = ($valorParcela * $qtdParcela) - $valorAvista;
            if($juros < 0) {
                return "Valor do parcelamento menor do que o preço a vísta";
            }
            return "Valor que será pago a mais devido o parcelamento é de: R$ " . number_format($juros, 2, ',', '.');
        }

    echo $init = calculaJuros($valorAvista, $qtdParcela, $valorParcela);
?>