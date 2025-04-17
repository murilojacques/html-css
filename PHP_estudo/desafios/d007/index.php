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
        $salario = $_GET["salario"] ?? 0;
        $salarioMin = 1518.00;
    ?>

    <main>
        <h1>Calculadora de Salarios</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Salario (R$)</label>
            <input type="number" name="salario" step="0.01">
            <small>Considerando o salário minimo de <b>R$ <?=$salarioMin?>,00</b></small>
            <input type="submit">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $numDSalariosMin = (int) ($salario / $salarioMin) ?? 0;
            $moduloSalario = $salario % $salarioMin;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

           print("<p>Quem recebe um salário de". numfmt_format_currency($padrao, $salario, "BRL") . " ganha <b>$numDSalariosMin salários mínimos</b> + " . numfmt_format_currency($padrao, $moduloSalario, "BRL") . "</p>")
        ?>
    </section>
</body>
</html>