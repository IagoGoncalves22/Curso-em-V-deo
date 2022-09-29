<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - ex 01</title>
</head>

<body>
    <form action="./al10 -01.php" method="get">
        numero: <input type="number" name="num" /></br>
        <fieldset>
            <legend>Operacao</legend>
            <input type="radio" name="oper" id="dobro" value="1" checked />
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" value="2" id="cubo" />
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" value="3" id="raiz" />
            <label for="raiz">Raiz Quadrada</label>
        </fieldset>

        <input type="submit" class="botao" value="Calcular" />
    </form>

    <div>
        <?php
        $n = isset($_GET['num']) ? $_GET["num"] : 0;
        $o = isset($_GET['oper']) ? $_GET["oper"] : 1;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n); // também dá certo $n ^ (1/2); $n ^ 0,5;
        }
        echo "O resultado da operação solicitada foi <span class='foco'> $r</span>";

        ?>
    </div>

</body>

</html>