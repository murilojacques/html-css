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
        $totalSegundos = $_GET["totalSegundos"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="totalSegundos">Qual é o total de segundos? </label>
            <input type="number" name="totalSegundos">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php
            $segundos = 0;
            $minutos = 0;
            $horas = 0;
            $dias = 0;
            $semanas = 0;
            $meses = 0;
            $anos = 0;
            $calcSegundos = $totalSegundos;
    
            if($totalSegundos >= 60){
                $minutos = (int)($totalSegundos/60) ?? 0;
                $calcSegundos = $calcSegundos % 60;
                $segundos = $calcSegundos;
            }
            if($minutos >= 60){
                $horas = (int)($minutos/60) ?? 0;
                $minutos = $minutos % 60;
            }
            if($horas >= 24){
                $dias = (int)($horas / 24) ?? 0;
                $horas = $horas % 24;
            }
            if($dias >= 7){
                $semanas = (int)($dias / 7) ?? 0;
                $dias = $dias % 7;
            }
            if($semanas >= 4){
                $meses = (int)($semanas / 4) ?? 0;
                $semanas = $semanas % 4;
            }
            if($meses >= 12){
                $anos = (int)($meses / 12) ?? 0;
                $meses = $meses % 12;
            }
        
        
            print("<p>Analisando o valor que você digitou, <b>" . number_format($totalSegundos, 0, ",", ".") . " segundos</b> equivalem a um total de
            <ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundos segundos</li>
            </ul>
            </p>")
        ?>
    </section>
</body>
</html>