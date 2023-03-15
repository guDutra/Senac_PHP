<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);
$userFirsName = "Marcos";
$userLastName = "Moreira";
$user_age = 60;
echo "<h3> {$userFirsName} {$userLastName} </h3>";
/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);
$true = true;
$false = false;

$best_age = ($user_age>50);
var_dump($best_age);

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = '<article><h1> Call User Function!</h1></article>';
$codeClear = call_user_func("strip_tags", $code, );
var_dump($code, $codeClear);

$codeMore = function($code) {
    echo '<h1> {$code} </h1>';
};

$moneyFormat = function($val) {
    return "R$" .number_format($val * 5.5, 2, ',',
    '.');
};

echo $moneyFormat('1000');

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo";
$array = array('key' => 'value');
$array = [$string];
$object = new stdClass();
$object  -> hello = $string;
$null = null;
$int = 123;
$float = 12.123;

var_dump( [
    $string,
    $array, 
    $object,
    $null,
    $int,
    $float
]
);