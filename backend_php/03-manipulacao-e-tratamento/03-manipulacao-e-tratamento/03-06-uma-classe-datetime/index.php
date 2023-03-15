<?php

require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

$dateNow = new DateTime();
$dateBirth = new DateTime("1982-06-12");
$dateStatic = DateTime::createFromFormat(DATE_BR, '08/10/2022 19:00:00');

var_dump(
    $dateNow,
    $dateBirth,
    $dateStatic
);

var_dump([
    $dateNow->format(DATE_BR),
    $dateNow->format('d'),
]);

echo "Hoje é dia {$dateNow->format('d')} do {$dateNow->format('F')} de {$dateNow->format('Y')}";

$newTimeZone = new DateTimeZone('Pacific/Apia');
$newDateTime = new DateTime('now', $newTimeZone);

var_dump([
    'Pacific/Apia' => $newDateTime->format(DATE_BR)
]);

//die;

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval",__LINE__);

$dateInterval = new DateInterval("P10Y2M1DT12H10M");

var_dump([
    $dateInterval
]);

$dateTime = new DateTime('now');

$dateTime->sub($dateInterval);
$dateTime->add($dateInterval);

var_dump($dateTime);

//die;

$myBirth = new DateTime(date('2023')."-10-08");

$myBorn = new DateTime("2005-10-08");
$today = new DateTime("now");

$diff = $today->diff($myBirth);

var_dump($diff, $myBorn, $today->diff($myBorn)->y);

if($diff->invert) {
    echo "<p> Seu último aniversário foi a {$diff->days} dias. </p>";
} else {
    echo "<p> Faltam {$diff->days}  dias para você completar". 
    (($today->diff($myBorn)->y) +1). " anos de idade.</p>";
}

/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);



$month = new DateInterval('P7D');
$recurrences = 12;

$datePeriod = new DatePeriod($myBorn, $month, $recurrences, DatePeriod::EXCLUDE_START_DATE);
var_dump($datePeriod);

foreach($datePeriod as $date) {
    echo $date->format(DATE_BR). '<br>';
};
echo "<br><hr><br>";
$iso = 'R4/2012-07-01T00:00:00Z/P7D';
$periodIso = new DatePeriod($iso);

foreach($periodIso as $period) {
    echo $period->format(DATE_BR). '<br>';
}

