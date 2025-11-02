<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>

    <form method="get">
        <input type="text" name="search" id="search">
        <button onclick="window.location.refresh();">Buscar</button>
    </form>
    <br>
    <button onclick="window.location.href='inserePessoa.html'">Inserir</button>
<?php
        require_once("listaPessoa.php");

        $pessoas = listarPessoas();

        echo "<h2>Lista de Pessoas</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Deletar</th>
            </tr>";

        foreach ($pessoas as $vPessoa) {
            echo "<tr>";
            echo "<td>{$vPessoa['pesnome']}</td>";
            echo "<td>{$vPessoa['pessobrenome']}</td>";
            echo "<td>{$vPessoa['pesemail']}</td>";
            echo "<td>{$vPessoa['pespassword']}</td>";
            echo "<td>{$vPessoa['pescidade']}</td>";
            echo "<td>{$vPessoa['pesestado']}</td>";
            echo "<td> <button onclick=\"window.location.href='?deleta={$vPessoa['pescodigo']}'\">Deletar</button> </td>";
            echo "</tr>";
        }

        echo "</table>";

    if (isset($_GET['deleta'])) {
        require_once("deletaPessoa.php");
        $id = $_GET['deleta'];
        deletarPessoa($id);
        header("Refresh: 0"); 
        exit();
        // echo "<p>Pessoa deletada com sucesso!</p>";
    }
?>
</body>
</html>
