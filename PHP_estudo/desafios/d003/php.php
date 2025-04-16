<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $valor = $_GET["valor"] ?? 0;
            $cotacao = 5.86;
            $valorDolares = $valor/$cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            print("<p>O valor informado foi ". numfmt_format_currency($padrao, $valor, "BRL") . 
            " equivale a <b>" . numfmt_format_currency($padrao, $valorDolares, "USD") . "</b></p>");
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>