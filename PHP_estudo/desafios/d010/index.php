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
        $anoNasc = $_GET["anoNasc"] ?? 0;
        $anoEscolhido = $_GET["anoEscolhido"] ?? (int) date("Y");
        $idade = ((int)$anoEscolhido - $anoNasc) ?? 0;
    ?>

    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="anoNasc">Em que ano você nasceu</label>
            <input type="number" name="anoNasc">
            <label for="anoEscolhido">Quer saber sua idade em que ano? (atualmente estamos em <?=$anoEscolhido?>)</label>
            <input type="number" name="anoEscolhido">

            <input type="submit" value="Calcular Idade">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            print("<p>Quem nasceu em $anoNasc vai ter <b>$idade anos</b> em $anoEscolhido!</p>")
        ?>
    </section>
</body>
</html>