


<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio4</title>
</head>
<body>
    
<form action="#" method="post">

<div class="flex-box justify-center align-items-center">

<label for="name">
    <input type="text" name="name" value="" id="name" placeholder="name" required>
</label>

<label for="age">
    <input type="text" name="age" value="" id="age" placeholder="age" required>
</label>

<div class="result"> 
<?php 

$calcAge = function($age) {
    
return $age * 365;
};



if(isset($_POST)) {

    echo "<p> {$_POST['name']} VOCÊ JÁ VIVEU {$calcAge($_POST['age'])} </p>";
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

