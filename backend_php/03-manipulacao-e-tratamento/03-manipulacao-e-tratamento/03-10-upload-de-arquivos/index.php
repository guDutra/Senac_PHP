<?php
require __DIR__ .   '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);

$folder = __DIR__ . "/uploads";

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755); //criar um diretorio com a permissão 0755 = write
};

var_dump(
    [
      ///  "YYYY-MM-DD "
        "filesize" => ini_get("upload_max_filesize"),
        "postsize" => ini_get("post_max_size")
    ]
);

var_dump(
    [
        filetype(__DIR__ . "/index.php"),
        mime_content_type(__DIR__ . '/index.php')
    ]
);

$getPost = filter_input(INPUT_GET, 'post', FILTER_VALIDATE_BOOLEAN);

if ($_FILES && !empty($_FILES['file']['name'])) {
    var_dump($_FILES);
    $fileUpload = $_FILES['file'];
    var_dump($fileUpload);


    $allowedTypes = [
        'image/jpg',
        'image/jpeg',
        'image/png',
        'application/pdf'
    ];

    $newFileName = time() . mb_strstr($fileUpload['name'], '.');

    if (in_array($fileUpload['type'], $allowedTypes)) {
        if (move_uploaded_file($fileUpload['tmp_name'], __DIR__ . "/uploads/{$newFileName}")) {
            echo "<p class='trigger accept'> Arquivo enviado com  sucesso</p>";
        } else {
            echo "<p class='trigger error'> Erro inesperado</p>";
        }
    } else {
        echo "<p class='trigger warning'> Tipo de arquivo não permitido </p>";
    }
} elseif ($getPost) {
    echo "<p class='trigger warning'> Parece que o arquivo é mt grande </p>";
} else {
    echo "<p class='trigger warning'> Selecione um arquivo antes de enviar!</p>";
}

include_once __DIR__ . "/form.php";

/*var_dump(scandir
(__DIR__ .'/uploads'));*/