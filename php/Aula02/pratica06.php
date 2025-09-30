<?php

// $cars = array(
//             array("Volvo",22,18),
//             array("BMW",15,13),
//             array("Saab",5,2), 
//             array("Land Rover",17,15)
//         );

// echo $cars[0][0].":".$cars[0][1].":".$cars[0][2].".<br>";
// echo $cars[1][0].":".$cars[1][1].":".$cars[1][2].".<br>";
// echo $cars[2][0].":".$cars[2][1].":".$cars[2][2].".<br>";
// echo $cars[3][0].":".$cars[3][1].":".$cars[3][2].".<br>";


$header = array(
            array("<thead>"),
                array("<tr>"),
                    array("<td> Disciplina </td>"),
                    array("<td> Faltas </td>"),
                    array("<td> Média </td>"),
                array("</tr>"),
            array("</thead>"),
            array("<tbody>"),
                array("<tr>"),
                    array("<td> Matematica </td>"),
                    array("<td> 5 </td>"),
                    array("<td> 8.5 </td>"),
                array("</tr>"),
            array("</tbody>")
);


for ($i = 0; $i < 100; $i++) {
    echo $header[$i][0];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <thead>
        <td></td>
    </thead>
    <tbody>
</body>
</html>