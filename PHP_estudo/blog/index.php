<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //declare(strict_types = 1);
        //require 'configuracao.php';
        require_once 'sistema/configuracao.php';
        include_once 'helpers.php';
        //include 'configuracao.php';

        $texto = "texto para Resumir";
        
        
        //$total = mb_strlen(trim($texto));
        // echo "<hr>"; 
        // echo $resumo = mb_substr($texto, 2, 15);
        // echo "<hr>";
        // echo $ocorrencia = mb_strrpos($texto, "i");

        print(saudacao());
        print("<hr>");
        print("<br>".resumirTexto($texto, 50));
        print("<hr>");
        print(formatarValor(15));
    ?>
</body>
</html>