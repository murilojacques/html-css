<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processo</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem_Nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            
            print("<p>É um prazert te conhecer <b>$nome $sobrenome</b>, este é o meu site!</p>");
            // print("2" + "2");
        ?>

        <p><a href="javascript:history.go(-1)">voltar para página anterior</a></p>
    </main>
</body>
</html>