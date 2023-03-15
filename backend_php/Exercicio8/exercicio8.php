


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

<label for="day">
    <input type="text" name="day" value="" id="day" placeholder="day" required>
</label>

<label for="month">
    <input type="text" name="month" value="" id="month" placeholder="month" required>
</label>

<div class="result"> 
<?php 

$calcTime = function($day, $month) {
$time = (($month-1)*30)+$day;    
return $time;
};



if($_POST) {

    echo "<p> Já se passaram {$calcTime($_POST['day'],$_POST['month'])} dias desdo o inicio do ano.</p>";
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

