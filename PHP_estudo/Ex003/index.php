<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    
    <?php 
        // // 0x = Hexadecimal    0b = binario    0 = octal
        // $num = 010;
        // print("O Valor da Variavel é $num");

        // $v = 300;
        // var_dump($v);


        // $num = 3e2; // 3 x 10(2)
        // print("O Valor da Variavel é $num");
        // var_dump($num);

        // $num = (int) 3e2; // 3 x 10(2)
        // print("O Valor da Variavel é $num");
        // var_dump($num);


        // $num = "950";
        // print("O Valor da Variavel é $num");
        // var_dump($num);

        // $num = (float) "950";
        // print("O Valor da Variavel é $num");
        // var_dump($num);


        // $acordado = true;
        // //var_dump($acordado);
        // print("O Valor para acordado é $acordado");

        // $acordado = false;
        // //var_dump($acordado);
        // print("O Valor para acordado é $acordado");



        // $vet = [6, 2, 9, 3, 5];
        // //print("O vetor é $vet\n");
        // var_dump($vet);


        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>
</body>
</html>