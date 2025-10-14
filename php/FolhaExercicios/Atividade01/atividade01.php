<?php
require_once("acao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Número 01</p>
        <input type="number" name="num01" id="num01">
        <p>Número 02</p>
        <input type="number" name="num02" id="num02">
        <p>Número 03</p>
        <input type="number" name="num03" id="num03">
        <input type="submit" value="Send">

        <input type="text" name="result" value="<?php  ?>" id="result" readonly>
    </form>
</body>
</html>