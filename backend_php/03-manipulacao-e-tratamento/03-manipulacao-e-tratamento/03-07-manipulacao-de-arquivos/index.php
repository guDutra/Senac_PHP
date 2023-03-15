<?php
require __DIR__ .   '/../../../fullstackphp/fsphp.php';   // '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.07 - Manipulação de arquivos");


/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);
$file = __DIR__ ."/arquivo.txt";
if(file_exists($file) && (is_file($file))) {

    echo "Existe";
} else  {
    echo "Não existe";
}

if(!file_exists($file) || !(is_file($file))) {
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, 'E EU ME SINTO ABENÇOADO');   /* "<?php  <html> <h1> OI </h1></html> ?> php_eol");*/
    fclose($fileOpen);
} else {
    var_dump(file($file), pathinfo($file));
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);


//echo file($file [1]);
$read = fopen($file, "r");

while (!feof($read)) {
    echo "<p>" .fgets($read)  ."</p>";
}
/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);
$getContents = __DIR__ ."/arquivo2.txt";

if(file_exists($getContents) && is_file($getContents)) {
    echo file_get_contents($getContents);
   
} else {
    $data = "<a> Cruelgudoidao  </a> <p> Marceneiro</p>";
    file_put_contents($getContents, $data);
   
}

 //fclose($getContents);



