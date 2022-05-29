<?php

///////////  CONEXÃO EM PDO  ///////////
$localhost = "localhost";
$user = "root";
$password = "";
$dbName = "loja";

$pdo = new PDO("mysql:dbname=".$dbName."; host=".$localhost, $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM usuarios");
$sql->execute();

echo $sql->rowCount();

?>