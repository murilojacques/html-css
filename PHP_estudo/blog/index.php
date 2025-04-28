<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <?php
        //declare(strict_types = 1);
        require 'vendor/autoload.php';

        use sistema\Nucleo\Mensagem;
        use sistema\Nucleo\Helpers;
        use sistema\Nucleo\Controlador;

        echo Helpers::limparNumero('1a4d5s46asf48454dg464a333ad4');
        echo "<hr>";
        echo SITE_NOME;
        echo "<hr>";

    ?>
</body>
</html>