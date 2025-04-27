<?php

function formatarValor(float $valor): string{
    return number_format($valor, 2, ",", ".");
}


function saudacao(): string
{

    $hora = date("H");
    $saudacao = "Hoje é um dia";

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = "Boa Madrugada";
    } elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = "Boa Dia";
    } elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = "Boa Tarde";
    } else {
        $saudacao = "Boa Noite";
    }

    return $saudacao;
}

function resumirTexto(string $texto, int $limite): string
{
    $textoLimpo = trim($texto);
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ""));

    return $resumirTexto. "...";
}
