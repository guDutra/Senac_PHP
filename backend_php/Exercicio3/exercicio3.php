


<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio3</title>
</head>
<body>
    
<form action="#" method="post">

<div class="flex-box justify-center align-items-center">

<label for="paes">
    <input type="text" name="paes" value="" id="paes" placeholder="paes" required>
</label>
<
<label for="broas">
    <input type="text" name="broas" value="" id="broas" placeholder="broas" required>
</label>

<div class="result"> 
<?php 

$calPoupanca = function($paes, $broas) {
    $precoPaes = $paes * 0.12;
    $preco_broas = $broas * 1.50;
    $soma = $precoPaes+$preco_broas;
    $poupanca = $soma*0.10;
return $poupanca;
};

$calTotal = function($paes, $broas) {
$precoPaes = $paes * 0.12;
$preco_broas = $broas * 1.50;
$soma = $precoPaes+$preco_broas;
return $soma;
};

if(isset($_POST)) {

    echo "<p> O total arecadado foi de {$calTotal($_POST['paes'],$_POST['broas'])} e o q quantidade para  a poupança vai ser de {$calPoupanca($_POST['paes'],$_POST['broas'])}</p>";
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

