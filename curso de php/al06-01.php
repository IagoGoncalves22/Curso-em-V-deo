<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - 01</title>
</head>

<body>
    <h1>Operadores de Atribuição</h1>
    <h2>Exercício 10% de desconto em um produto</h2>

    <?php
    $preco = $_GET["p"];
    echo "O preço do produto e R$ " . number_format($preco, 2);
    $preco = $preco + ($preco * 10 / 100);
    echo "<br/> O novo preco com 10% de aumento sera R$ " . number_format($preco, 2);


    ?>

</body>

</html>