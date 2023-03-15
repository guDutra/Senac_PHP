<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);
$arrProfile = [
    "profile" => ["name" => "Marcos",
    "lastname" => "Moreira"],
    "company" => "Zên Agência Web",
    "mail" => "marcos@zen.ppg.br"
];

$objProfile = (object) $arrProfile;

var_dump($arrProfile, $objProfile);

$objProfile->profile = (object) 
$arrProfile['profile'];

echo "<p>{$objProfile->profile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);

$ceo->profile->name = "Juca Pirama";

var_dump($ceo, $objProfile);

//die;

$company = new stdClass();

$company->company = "Zên Agência";
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->manager->name = 'Catiane';
$company->manager->mail = 'cati@zen.ppg.br';

echo "<p> aqui</p>";
echo "<p> O nome do ceo é {$ceo->profile->name} {$ceo->profile->lastname}  e o email do ceo é {$ceo->mail} </p>";
echo "<p> O nome do manager é {$company->manager->name} e o email dele é {$company->manager->mail}</p>";

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump(["class" => get_class($company),
"methods" => get_class_methods($company),
"vars" => get_object_vars($company),
"parent" => get_parent_class($company),
"subclass" => is_subclass_of($company, "stdClass")
]);

var_dump(["class" => get_class($date),
"methods" => get_class_methods($date),
"vars" => get_object_vars($date),
"parent" => get_parent_class($date),
"subclass" => is_subclass_of($date, "date")
]);

$exception = new PDOException();

var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "subclass" => is_subclass_of($exception, "Exception") 
]);
