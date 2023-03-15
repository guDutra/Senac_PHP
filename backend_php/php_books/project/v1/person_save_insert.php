<?php 

$postData = $_POST;
$conn = mysqli_connect('localhost', 'root', "gugu2018", 'books');

mysqli_set_charset($conn, 'utf8mb4');
$query = 'SELECT max(id)  as next FROM person';
$result = mysqli_query($conn, $query);
$next = (int) mysqli_fetch_assoc($result)['next']+1;

$sql = "INSERT INTO person (id, name, address, district, phone, mail, id_city)
 VALUES ('{$next}', '{$postData['name']}', '{$postData['address']}', '{$postData['district']}',
    '{$postData['phone']}','{$postData['mail']}' , '{$postData['id_city']}')";

$result = mysqli_query($conn, $sql);


if($result) {

print 'Registro inserido com sucesso';
} else {


print mysqli_error($conn);
}

mysqli_close($conn);
    




?>