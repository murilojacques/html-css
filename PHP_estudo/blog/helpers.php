<?php

function slug(string $string): string
{

    $mapa['a'] = 'ÀÁÂÃÇÈÉÊÌÍÎÑÒÓÔÕÙÚÛÝáàãâçéèêíìîôõóòúùûüöäïëÄÜÏÖË&@#$%*(){}[],.<>;/:?°ºª"+=_-|\'';
    $mapa['b'] = 'aaaaceeeiiinoooouuuyaaaaceeeiiioooouuuuoaieauioe';
    $slug = strtr(iconv('UTF-8', 'ISO-8859-1', $string), iconv('UTF-8', 'ISO-8859-1', $mapa['a']), $mapa['b']);
    $slug = strip_tags(trim($slug));
    $slug = str_replace(' ', "_", $slug);
    $slug = str_replace(['_____', '____', '___', '__'], "_", $slug);
    return strtolower(iconv('UTF-8', 'ISO-8859-1', $slug));
}


function url(string $url): string
{
    $servidor = $_SERVER["SERVER_NAME"];
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if (str_starts_with($url, "/")) {
        return $ambiente . $url;
    }

    return $ambiente . "/" . $url;
}

function localHost(): bool
{
    $servidor = $_SERVER["SERVER_NAME"];

    if ($servidor == 'localhost') {
        return true;
    }
    return false;
}


function validarURL(string $url): bool
{
    if (mb_strlen($url) < 10) {
        return false;
    }
    if (!str_contains($url, ".")) {
        return false;
    }
    if (str_contains($url, "http://") || str_contains($url, "https://")) {
        return true;
    }

    return false;
}

function validarURLComfiltro(string $url): bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}


function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


function dataAtual(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomeDiaSemana = ['Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado'];

    $nomesMeses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

    $dataFormatada = $nomeDiaSemana[$diaSemana] . ", " . $diaMes . " de " . $nomesMeses[$mes] . " de " . $ano;

    return $dataFormatada;
}

function contarTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200);
    $anos = round($diferenca / 29030400);

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? "há 1 minuto" : "há " . $minutos . " minutos";
    } elseif ($horas <= 24) {
        return $horas == 1 ? "há 1 hora" : "há " . $horas . " horas";
    } elseif ($dias <= 30) {
        return $dias == 1 ? "há 1 dia" : "há " . $dias . " dias";
    } elseif ($semanas <= 4) {
        return $semanas == 1 ? "há 1 semana" : "há " . $semanas . " semanas";
    } elseif ($meses <= 12) {
        return $meses == 1 ? "há 1 mês" : "há " . $meses . " meses";
    } else {
        return $anos == 1 ? "há 1 ano" : "há " . $anos . " anos";
    }
}


function formatarValor(float $valor): string
{
    return number_format($valor, 2, ",", ".");
}


function saudacao(): string
{
    $hora = date("H");
    $saudacao = "Hoje é um dia";

    // if ($hora >= 0 && $hora <= 5) {
    //     $saudacao = "Boa Madrugada";
    // } elseif ($hora >= 6 && $hora <= 12) {
    //     $saudacao = "Boa Dia";
    // } elseif ($hora >= 13 && $hora <= 18) {
    //     $saudacao = "Boa Tarde";
    // } else {
    //     $saudacao = "Boa Noite";
    // }

    switch ($hora) {
        case $hora >= 0 && $hora <= 5:
            $saudacao = "Boa Madrugada";
            break;

        case $hora >= 6 && $hora <= 12:
            $saudacao = "Boa Dia";
            break;

        case $hora >= 13 && $hora <= 18:
            $saudacao = "Boa Tarde";
            break;

        default:
            $saudacao = "Boa Noite";
            break;
    }

    return $saudacao;
}


function resumirTexto(string $texto, int $limite): string
{
    $textoLimpo = trim($texto);
    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ""));

    return $resumirTexto . "...";
}
