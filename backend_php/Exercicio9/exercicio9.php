


<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio9</title>
</head>
<body>
    
<form action="#" method="post">

<div class="flex-box justify-center align-items-center">

<label for="test1">
    <input type="text" name="test1" value="" id="test1" placeholder="Camisetas pequenas" required>
</label>

<label for="test2">
    <input type="text" name="test2" value="" id="test2" placeholder="Camisetas medias" required>
</label>

<label for="test3">
    <input type="text" name="test3" value="" id="test3" placeholder="Camisetas grandes" required>
</label>

<div class="result"> 
<?php 

$calcGrade = function($test1, $test2, $test3) {
$grade = ($test1*10)+($test2*12)+($test3*15);
$finalGrade = $grade/6;
return $finalGrade;
};



if($_POST) {

    echo "<p> amount collected:  {$calcGrade($_POST['test1'],$_POST['test2'],$_POST['test3'])}  </p>";
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

