<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Variáveis</title>
</head>

<body>
    <h1>Variáveis Variáveis</h1>
    <div>
        <?php
        $x = "abc";
        $$x = "def";
        echo " O conteudo da variavel X e $x";
        echo "<br/>";
        echo "A variavel criada recebeu o valor $abc";
        ?>
    </div>

</body>

</html>