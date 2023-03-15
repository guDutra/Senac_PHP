<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
define('UD', 'Back-end com PHP');
const TEACHER = 'Marcos Orlando';
const TESTE = 'ERROR';

$formation = true;

if($formation) {
    define("COURSE_TYPE", "Formação");

} else {
    define("COURSE_TYPE", "Curso Livre");
}

namespace  Source;

class Config {
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';

}
echo "<h1>", Config::HOST, "</h1>";
echo "<h1>", Config::USER, "</h1>";
echo "<h1>", Config::PASS, "</h1>";

var_dump(get_defined_constants(true)['user']);

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);
function backendPHP() {

    
    return __FUNCTION__;


}