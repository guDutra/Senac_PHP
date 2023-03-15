
<?php 
$calArea = function($width, $height) {
    return $width * $height;
};
$height_terrain = 0;
$widht_terrain = 0;

?>

<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="post">

<div class="flex-box justify-center align-items-center">

<label for="widht_terrain">
    <input type="text" name="widht_terrain" value="" id="widht_terrain" placeholder="INFORME A LARGURA" required>
</label>

<label for="height_terrain">
    <input type="text" name="height_terrain" value="" id="height_terrain" placeholder="INFORME A ALTURA" required>
</label>

<div class="result">
<?php 

if(isset($_POST)) {

    echo "<p>  A area do terreno é igual  {$calArea($_POST['widht_terrain'],$_POST['height_terrain'])} </p>";
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

