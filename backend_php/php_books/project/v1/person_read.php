<?php


$postData = $_POST;
$conn = mysqli_connect('localhost', 'root', "gugu2018", 'books');
mysqli_set_charset($conn, 'utf8mb4');
$query = 'SELECT * FROM person ORDER BY id ASC';
$result = mysqli_query($conn, $query);
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../v1/_css/form.css">
    <link rel="stylesheet" href="../v1/_css/table.css">
</head>
<body>
    
<section class="list">

<table>
  
<thead>

<tr class="header">
<th></th>
<th></th>
<th>ID.</th>
<th> Nome</th>
<th>Endereço</th>
<th>Distrito</th>
<th>Telefone</th>
</tr>
</thead>
<tbody>

<?php

foreach($result as $person) {
    extract($person);

    print "
    
    <tr>
    <td class='center'><a href='person_form_edit.php?id={$id}'>
    <img src='images/icons8-edit-50.svg' style='width:25px'> </a></td>

    <td class='center'><a href-'person_delete.php?id={$id}'>
     <img src='images/icons8-trash-can-50.svg' style='width:25px'> </a></td>
    </td>
    <td>{$id}</td>
    <td>{$name}</td>
    <td>{$address}</td>
    <td>{$district}</td>
    <td>{$phone}</td>
    </tr>
    ";
};

?>

</tbody>
</table>

<button onclick="window.location='person_form_insert.php'" class="btn btn-light-gray">
<img src='images/icons8-settings-50.svg' style='width:25px'> INSERIR
</button>

</section>


</body>
</html>