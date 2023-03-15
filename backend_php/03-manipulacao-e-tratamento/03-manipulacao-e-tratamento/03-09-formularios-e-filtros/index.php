<?php
require __DIR__ .   '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);
$form = new StdClass();
$form -> name ='Gustavo Dutra';
$form ->mail  = 'gudutra05@outlook.com';

var_dump($_REQUEST);
//$form->method ='get';
$form->method ='post';

include __DIR__ .'/form.php';

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);
var_dump($_POST);

$post['name']= filter_input(INPUT_POST,'name');
$postArray = filter_input_array(INPUT_POST);

var_dump([$post, $postArray]);


if($postArray) {
    if(in_array('', $postArray)) {
        echo "<p class='trigger warning'>PREENCHA TODOS OS CAMPOS</p>";
    } elseif (!filter_var($postArray['mail'],FILTER_VALIDATE_EMAIL)) {
        echo "<p class='trigger warning'>E-MAIL INVÁLIDO</p>";
    } else {
        $postArray = array_map('strip_tags', $postArray);
        $save = array_map('trim', $postArray);
        var_dump($save);
        echo "<p class='trigger accept'> Cadastro realizado com sucesso!</p>";
    }
}


/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);


/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);
var_dump(
    filter_list(),
    filter_id('validate_domain'),FILTER_VALIDATE_DOMAIN, FILTER_SANITIZE_STRING
);
$filterForm = [
    'name' => FILTER_SANITIZE_STRIPPED,
    'mail' => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterForm);

var_dump($getForm);

$email = 'gudutra05@outlook.com'; 
var_dump(
    filter_var($email,
    FILTER_VALIDATE_EMAIL)
);