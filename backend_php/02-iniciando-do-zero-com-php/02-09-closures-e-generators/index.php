<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function($year) {
    $age = date('Y') - $year;
    return "<h1>Você tem {$age} anos! </h1>";
};
echo $myAge(1982);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 20;

function showDates($days)
 {
    $saveDate = [];
    for ($day=1; $day < $days; $day++) { 
        $saveDate [] = date("d/m/Y", strtotime("+{$day}days!"));
    };
    return $saveDate;
}

foreach(showDates($iterator) as $date) {
    echo "<small class='tag' style='margin:5px'> {$date} </small>";
};


 function generatorDate($days) {
    for($day=1; $day < $days; $day++) {

        yield date("d/m/Y", strtotime("+{$day}days!")); //yield -> função que não loca memória/generator
    };
 };

 foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag' style='margin:5px'> {$date} </small>" .PHP_EOL;
 }



