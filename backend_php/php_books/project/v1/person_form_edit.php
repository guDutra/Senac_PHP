<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="../v1/_css/form.css">
</head>
<body>

<form action="person_save_insert.php" method="POST" enctype="multipart/form-data">

<label for="id"> Código</label>
<input type="text" name="id" readonly style="width: 50%;">

<label for="name"> Nome</label>
<input type="text" name="name" required style="width: 50%;">

<label for="address"> Endereço</label>
<input type="text" name="address" required style="width: 50%;">

<label for="district"> Bairro</label>
<input type="text" name="district" required style="width: 50%;">

<label for="phone"> Telefone</label>
<input type="text" name="phone" required style="width: 50%;">

<label for="mail"> E-mail</label>
<input type="text" name="mail" required style="width: 50%;">

<label for="id_city"> Cidade</label>
<select type="text" name="id_city" required style="width: 50%;"> 

<?php 

require_once 'list_cities.php';
print list_cities()

?>

</select>

<button class="btn btn-light-gray" type="submit">
    <img src="images/icons8-settings-50.svg" style="width: 25px;" >
    SALVAR
</button>

</form>

</body>
</html>