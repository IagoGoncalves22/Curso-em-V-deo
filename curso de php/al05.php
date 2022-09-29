<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>

<body>
    <h1>Funções Aritiméticas</h1>

    <h2>abs () Valor Absoluto</h2>
    <h2>pow () Potencialização</h2>
    <h2>sqrt () Raiz Quadrada</h2>
    <h2>round () Arredondamento</h2>
    <h2>intval () Valor Interiro da Variável</h2>
    <h2>number_format () Formatação</h2>

    <br>
    <hr>

    <?php
    $v1 = 1888;
    $v2 = -3;

    echo "<h2> Valores recebidos: $v1 e $v2</h2>";
    echo " O valor absoluto de $v2 e " . abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
    echo "<br/>A raiz de $v1 e " . sqrt($v1);
    echo "<br/>O valor de $v2 arredondado e " . round($v2);
    echo "<br/>A parte inteira de $v2 e " . intval($v2);
    echo "<br/> O valor de $v1 em moeda e R$" . number_format($v1, 2, ",", ".");





    ?>

</body>

</html>