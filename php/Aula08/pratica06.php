<?php
    $matriz = [
        ['Nome', 'Idade', 'Curso'],
        ['Ana', 25, 'Desenvolvimento'],
        ['Bruno', 30, 'Design'],
        ['Carla', 22, 'Qualidade']
    ];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tabela com PHP</title>
    </head>
<body>
    <table>
        <?php
            foreach ($matriz as $linha) {
            echo "<tr>";
            foreach ($linha as $coluna) {
            echo "<td>$coluna</td>";
            }
            echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
