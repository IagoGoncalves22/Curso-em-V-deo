<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 ex 04</title>
</head>

<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2014 - $ano;
    echo "Quem nasceu em $ano tem idade de  $idade anos";
    $tipo = ($idade >= 18 && $idade <= 65) ? "obrigatório" : "Não Obrigatório";
    echo "<br/> E dessa forma seu voto é $tipo";
    ?>

</body>

</html>