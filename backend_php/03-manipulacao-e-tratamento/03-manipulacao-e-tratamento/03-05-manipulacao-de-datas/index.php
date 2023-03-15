<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump( [
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d/m/Y H:i:s")
]);

define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
    date_default_timezone_get(),
    date(DATE_BR)
]);

var_dump(getdate());

echo getdate()['year']+10;

$getDate = (object)getdate();

echo "<p> Hoje é dia  .(getdate()['mday']+10). de   {$getDate->month} </p>";




/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump(
    [
        "strtotime NOW" => strtotime("now"),
        "time" => time(),
        "date-time" => date(DATE_BR, time()),
        "strtotime+10d" => date(DATE_BR, strtotime("+10days")),
        "strtotime-10d" => date(DATE_BR, strtotime("-10days")),
        "strtotime-1m" => date(DATE_BR, strtotime("-1months")),
        "strtotime-1y" => date(DATE_BR, strtotime("+1years")),
    ]);

    $format = utf8_decode('%d/%B/%Y %Hh%Mmin');

    echo "<p> A data hoje é ". strftime($format). "</p>";
    echo strftime("Hoje é dia %d de %B de %Y às %H horaas e %M minutos", strtotime("today"));