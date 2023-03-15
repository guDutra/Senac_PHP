<?php
require __DIR__ .   '/../../../fullstackphp/fsphp.php';   // '/../../fullstackphp/fsphp.php';
$file = __DIR__ . "/list.txt";



if(isset($_POST['name']) && isset($_POST['phone'])) {
if (file_exists($file) || (is_file($file))) {

   
    $data = "<a class='artigo'>" . $_REQUEST['name']  . "</a>"  . "<a class='artigo'>" . $_REQUEST['age'] . "</a>" . "<a class='artigo'>" . $_REQUEST['phone']  . "</a>" . "\n";
    file_put_contents($file, $data, FILE_APPEND);
    
    
} else {
    $fileOpen = fopen($file, "w");
    $data = "<a class='artigo'>" . $_REQUEST['name']  . "</a>"  . "<a class='artigo'>" . $_REQUEST['age'] . "</a>" . "<a class='artigo'>" . $_REQUEST['phone']  . "</a>" . "\n";

    file_put_contents($fileOpen, $data, FILE_APPEND);
    
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio arquivo txt</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Lista Telefonica</h1>

    <article class="formulario">


        <form action="" method="post">

            <div class="itens">
                <label for="name"> Name:</label>
                <div class="inp"> <input type="text" name="name" id="name"> </div>
            </div>
            <div class="itens">
                <label for="age"> Age:</label>
                <div class="inp"> <input type="number" name="age" id="age"> </div>
            </div>
            <div class="itens">
                <label for="phone">Phone:</label>
                <div class="inp"> <input class="phoneForm" type="text" name="phone" id="phone" > </div>
            </div>
            <button type="submit"> Submit</button>
            <button type="button" onclick="window.location='/backend_php/03-manipulacao-e-tratamento/03-manipulacao-e-tratamento/03-07-manipulacao-de-arquivos/list.php'" >
             Search  </button>

        </form>
    </article>

    <section>
       
    </section>


    <script src="script.js"></script>
</body>

</html>