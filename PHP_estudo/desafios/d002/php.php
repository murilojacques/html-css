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
        <h1>Trabalhando com Números aleatórios</h1>
        <?php
            $ranNum = mt_rand(0, 100);
            print("<p>gerando um número aleatório entre 0 e 100...</p>");
            print("<p>O valor gerado foi <b>$ranNum</b></p>");
            
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>
    </main>
</body>
</html>