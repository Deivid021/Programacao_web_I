<?php

    $valorAvista = $_POST['vista'];
    $qtdParcela = $_POST['parcela'];

    function calculaJurosSimples($valorAvista, $qtdParcela) {
        switch ($qtdParcela) {
            case '24':
                $juros = $valorAvista * 0.015 * $qtdParcela;
                return ($valorAvista + $juros) / $qtdParcela;
                break;

            case '36':
                $juros = $valorAvista * 0.020 * $qtdParcela;
                return ($valorAvista + $juros) / $qtdParcela;
                break;
                
            case '48':
                $juros = $valorAvista * 0.025 * $qtdParcela;
                return ($valorAvista + $juros) / $qtdParcela;
                break;

            case '60':
                $juros = $valorAvista * 0.030 * $qtdParcela;
                return ($valorAvista + $juros) / $qtdParcela;
                break;
            
            default:
                return 'Parcela Invalida';
                break;
        }
    }

    $parcela = calculaJurosSimples($valorAvista, $qtdParcela);
    echo "Valor da Parcela: R$ " . number_format($parcela, 2, ',', '.');
    echo "<br>";  
    echo "Quantidade de Parcelas: " . $qtdParcela . " Vezes";  
    echo "<br>";  
    echo "Valor Total Parcelado: R$ " . number_format(($parcela * $qtdParcela), 2, ',', '.');  
    echo "<br>";  
    echo "Valor a Vísta: R$ " . number_format($valorAvista, 2, ',', '.');  
?>

<!-- Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
utiliza Juros Simples para o cálculo das parcelas.
Sabendo então que o valor a vista do moto é R$ 8.654,00.
Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que
a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
24 ezes
36 vezes
48 vezes
60 vezes -->