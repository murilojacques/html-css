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
        $dividendo = $_GET["dividendo"] ?? 1;
        $divisor = $_GET["divisor"] ?? 1;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor">
            <input type="submit">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resulDiv = (int) ($dividendo / $divisor) ?? 0;
            $moduloDiv = $dividendo % $divisor;

            print("<p>Dividendo: $dividendo</p><br>");
            print("<p>Divisor: $divisor</p><br>");
            print("<p>Resultado: $resulDiv</p><br>");
            print("<p>Resto da Divisão: $moduloDiv</p><br>");
        ?>
    </section>
</body>
</html>