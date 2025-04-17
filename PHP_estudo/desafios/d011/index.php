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
        $preco = (float)$_GET["preco"] ?? 0;
        $taxaReajuste = $_GET["taxaReajuste"] ?? 0;
    ?>

    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" step="0.01">

            <label for="taxaReajuste">Taxa de Reajuste de Preço (<b><span id="p">?%</span></b>)</label>
            <input type="range" name="taxaReajuste" id="taxaReajusteId" step="1" min="0" max="100" oninput="mudaValor()">

            <input type="submit" value="ajustar Preço">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $newPreco = (float)($preco + (($preco/100)*$taxaReajuste)) ?? 0;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

           print("<p>O Produto que custava ". numfmt_format_currency($padrao, $preco, "BRL") . ", com <b>$taxaReajuste% de aumento</b> vai passar a custar" . numfmt_format_currency($padrao, $newPreco, "BRL") . " a partir de agora</p>")
        ?>
    </section>

    <script src="javascript.js"></script>
</body>
</html>