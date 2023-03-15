<?php
$servername = "localhost";
$username = "nitro5_Dutra\gudut_fovlxb5";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=e_commerceSenac", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>