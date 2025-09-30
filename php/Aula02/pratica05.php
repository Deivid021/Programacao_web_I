<?php

    $disciplinas = ['Estrutura de Dados II', 'Banco de Dados II', 'Adminisitração e Sistemas de Informação', 'Engenharia de Software II', 'Programacao Web I'];
    $professores = ['Bastos', 'Marco', 'Marciel', 'Jullian', 'Cleber'];

    for ($i = 0; $i < 5; $i++) {
        echo "Disciplina: $disciplinas[$i], Professor: $professores[$i] ";
        echo "<br>";
    }

?>