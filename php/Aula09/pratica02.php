<?php
    $pastas = array(
        "bsn" => array(
            "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
            "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
        )
    );

    function exibeArvore($array, $nivel = 0) {
        foreach ($array as $chave => $valor) {
            if (is_array($valor)) {
                echo $chave. "<br>";
                exibeArvore($valor, $nivel + 1);
            } else {
                echo "$valor<br>";
            }
        }
    }

    exibeArvore($pastas);
?>