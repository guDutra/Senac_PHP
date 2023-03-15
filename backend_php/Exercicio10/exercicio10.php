


<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio10</title>
</head>
<body>
    
<form action="#" method="post">

<div class="flex-box justify-center align-items-center">

<label for="x">
    <input type="text" name="x" value="" id="x" placeholder="x" required>
</label>

<label for="y">
    <input type="text" name="y" value="" id="y" placeholder="y" required>
</label>



<div class="result"> 
<?php 

$calcDistance = function($x, $y) {
$distancia = 0;
    if($x > $y) {
        $distancia = $x-$y;
}

if($x < $y) {
    $distancia = $y-$x;
}


return $distancia;
};



if($_POST) {

    echo "<p> amount collected:  {$calcDistance($_POST['x'],$_POST['y'])}  </p>";
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

