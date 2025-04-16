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
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET["numero"];
            $ant = $num-1;
            $suc = $num+1;
            print("<p>O numero <b>digitado</b> foi $num</p>");
            print("<p>Seu <b>Antecessor</b> é $ant</p>");
            print("<p>E Seu <b>Sucessor</b> é $suc</p>");
        ?>
        <p><a href="javascript:history.go(-1)">voltar</a></p>
    </main>
</body>
</html>