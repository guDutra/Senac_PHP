<?php

function list_cities($id = null)

{

$conn = mysqli_connect('localhost', 'root', "gugu2018" , 'books');

mysqli_set_charset($conn, 'utf8mb4');

$query = 'SELECT id, name FROM cities';
$result = mysqli_query($conn, $query);

if($result) {
    $output = "<option value '' selected disabled> SELECIONE A CIDADE</option>";
    while ($row = mysqli_fetch_assoc($result)) {

        $checked = ($row['id'] == $id) ? 'selected' : '';
        $output .= "<option {$checked} value='{$row['id']}'> {$row['name']} </option>";
    }
}

return $output;
}



?>