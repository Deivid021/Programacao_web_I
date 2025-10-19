<?php

    $valorAvista = $_POST['vista'];
    $qtdParcela = $_POST['parcela'];

    function calculaJurosSimples($valorAvista, $qtdParcela) {
        switch ($qtdParcela) {
            case '24':
                $montante = $valorAvista * pow((1 + 0.02),  $qtdParcela);
                $valorParcela = $montante / $qtdParcela;
                return $valorParcela;
                break;

            case '36':
                $montante = $valorAvista * pow((1 + 0.023), $qtdParcela);
                $valorParcela = $montante / $qtdParcela;
                return $valorParcela;
                break;
                
            case '48':
                $montante = $valorAvista * pow((1 + 0.026), $qtdParcela);
                $valorParcela = $montante / $qtdParcela;
                return $valorParcela;
                break;

            case '60':
                $montante = $valorAvista * pow((1 + 0.029), $qtdParcela);
                $valorParcela = $montante / $qtdParcela;
                return $valorParcela;
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

<!-- 
Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
pena que ele não sabia da mesma chance que Paulinho.
A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o
valor das parcelas.

As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36,
48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para
as opções de parcelamento seguintes. -->