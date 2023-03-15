


<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio2</title>
</head>
<body>
    
<form action="#" method="post">

<div class="flex-box justify-center align-items-center">

<label for="quantidade">
    <input type="text" name="quantidade" value="" id="quantidade" placeholder="Cavalos" required>
</label>
<!--
<label for="height_terrain">
    <input type="text" name="height_terrain" value="" id="height_terrain" placeholder="INFORME A ALTURA" required>
</label>--->

<div class="result"> 
<?php 

$calFerraduras = function($cavalos) {
    return $cavalos * 4;
};
if(isset($_POST)) {

    echo "<p>  A quantidade de ferraduras suficientes é  {$calFerraduras($_POST['quantidade'])} </p>";
}
unset($_POST);///serve para matar a variavel do post ou seja tirar a locação de espaço da variavel
?>

<div class="flex-box actions">
   <button class="red" type="reset">LIMPAR</button>
   <button class="green" type="submit"> CALCULAR</button>
</div>
</form>
</div>
</body>
</html>

