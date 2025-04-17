<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1">

            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1">

            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2">

            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2">

            <input type="submit" value="Calcular Média">
        </form>
    </main>

    <section>
        <h2>Calculo das Médias</h2>
        <?php 
            $mediaAriSim = ($valor1+$valor2)/2;
            $mediaAriPon = (($valor1 * $peso1 + $valor2 * $peso2)/($peso1+$peso2));
            
            print("<p>Analisando os valores <b>$valor1</b> e <b>$valor2</b>: 
            <ul>
                <li>A <b>Média Aritmética Simples</b> entre os valores é igual a <b>". number_format($mediaAriSim, 2) . "</b></li>
                <li>A <b>Média Aritmética Ponderada</b> com peso $peso1 e $peso2 é igual a  <b>" . number_format($mediaAriPon, 2) . "</b></li>
            </ul>
            </p>")
        ?>
    </section>
</body>
</html>