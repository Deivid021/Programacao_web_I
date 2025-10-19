<?php
    $pastas = array(
        "bsn" => array(
            "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
            "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
        )
    );

    function showTree($pastas, $nivel = 1) {
        foreach ($pastas as $chave => $valor) {
            if(is_array($valor)) {
                echo str_repeat("-", $nivel) . " " . $chave . "<br>";
                showTree($valor, $nivel + 1);
            } else {
            echo str_repeat("-",$nivel) . " " . $valor. "<br>";
            }
        }
    }

    showTree($pastas);
?>

