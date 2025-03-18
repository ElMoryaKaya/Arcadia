<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_arcadia";

try {
  $connect = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "La connexion a bien été établie";
} catch (PDOException $e) {
  echo "La connexion a échoué :" . $e->getMessage();
};
?>