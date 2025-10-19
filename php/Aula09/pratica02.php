<?php
    $pastas = array(
        "bsn" => array(
            "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
            "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
        )
    );

    function exibeArvore($array) {
        foreach ($array as $chave => $valor) {
            if (is_array($valor)) {
                echo $chave. "<br>";
                exibeArvore($valor);
            } else {
                echo "$valor<br>";
            }
        }
    }

    exibeArvore($pastas);
?>