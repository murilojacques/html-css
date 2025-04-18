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
        $valor = $_GET["valor"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor">
            <small>*Notas disponiveis: R$100, R$50, R$10 e R$5</small>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php
            $notasCem = 0;
            $notasCinq = 0;
            $notasDez = 0;
            $notasCinco = 0;
            $troco = 0;
            $calcValor = $valor;

            if($valor >= 100){
                $notasCem = (int)($calcValor / 100) ?? 0;
                $calcValor = $calcValor % 100;
            }
            if($calcValor >= 50){
                $notasCinq = (int)($calcValor / 50) ?? 0;
                $calcValor = $calcValor % 50;
            }
            if($calcValor >= 10){
                $notasDez = (int)($calcValor / 10) ?? 0;
                $calcValor = $calcValor % 10;
            }
            if($calcValor >= 5){
                $notasCinco = (int)($calcValor / 5) ?? 0;
                $troco = $calcValor % 5;
            }
            if($calcValor < 5){
                $troco = $calcValor;
            }
        
        
            print("<p>Analisando o valor que você digitou, <b>R\$" . number_format($valor, 0, ",", ".") . " </b> equivalem a um total de
            <ul>
                <li>$notasCem de R\$100</li>
                <li>$notasCinq de R\$50</li>
                <li>$notasDez de R\$10</li>
                <li>$notasCinco de R\$5</li>
                <li>Ainda será necessário mais R\$$troco </li>
            </ul>
            </p>")
        ?>
    </section>
</body>
</html>