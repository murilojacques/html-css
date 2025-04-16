<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_POST["numeroReal"] ?? 0;
            $numAbs = (int) $numero;
            $numFra = $numero - $numAbs;

            print("<p>Analisando o numero <b>". number_format($numero, 3, ",", ".") ."</b> informado pelo usuario: </p>");
            print("<ul>
                <li>A parte inteira do numero é <b>".number_format($numAbs, 0, ",", ".")."</b></li>
                <li>A parte fracionada do numero é <b>".number_format($numFra, 3, ",", ".")."</b></li>
            </ul>");
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>