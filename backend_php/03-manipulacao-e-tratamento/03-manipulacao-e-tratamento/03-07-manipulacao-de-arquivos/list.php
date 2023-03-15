<?php
require __DIR__ .   '/../../../fullstackphp/fsphp.php';
$file = __DIR__ . "/list.txt";

/* 
if(file_exists($file) && is_file($file)) {
    $read = fopen($file, "r");
    while (!feof($read)) {
        echo "<p>" .fgets($read)  ."</p>";
    }
   
} else {
    $data = "<a> Cruelgudoidao  </a> <p> Marceneiro</p>";
    file_put_contents($getContents, $data);
   
}


$read = fopen($file, "r");

while (!feof($read)) {
    echo "<p>" .fgets($read)  ."</p>";
} */

?>




<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Telefonica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    if (file_exists($file) && is_file($file)) {

        $read = fopen($file, "r");
        echo "<div class='artigao'>";
        echo "<a class='artigoHead'> NAME  </a> <a>  AGE </a> <a> PHONE </a>";
        while (!feof($read)) {

            echo fgets($read);
            ///echo "       <tr> <td>" .fgets($read) ."</td> <td>" .fgets($read) ."</td> <td>" .fgets($read) ."</td> </tr>";

        }
        echo "</div>";
    }
    ?>
</body>

</html>