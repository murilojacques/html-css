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
        $num = $_GET["numero"] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" step="0.01">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $raizQua = sqrt($num);
            $raizCub = pow($num, (1/3));
            
            print("<p>Analisando o <b>número $num</b>, temos: 
            <ul>
                <li>A raiz quadrada é <b>". number_format($raizQua, 3) . "</b></li>
                <li>A raiz cúbica é <b>" . number_format($raizCub, 3) . "</b></li>
            </ul>
            </p>")
        ?>
    </section>
</body>
</html>