<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
require __DIR__. '/functions.php';

 var_dump(functionName('Pearl Jam', 'AC/DC', 'Pink Floyd', 'Nirvana', 'AM', 'JOTA QUEST'));
 var_dump(functionDEFAULT('Pearl Jam'));




/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 86;
$height = 1.83;

echo 'Seu IMC é de: '. calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

echo $pay = PayTotal(200);
echo $pay = PayTotal(300);
echo $pay = PayTotal(400);

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

echo var_dump(MyClass('Juca', 'Paulo', 'ZÉ', 'Irmao'));