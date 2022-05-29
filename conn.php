<?php

session_start();

///////////  CONEXÃO EM PDO  ///////////
$localhost = "localhost";
$user = "root";
$password = "";
$dbName = "loja";

global $pdo;

try{
    $pdo = new PDO("mysql:dbname=".$dbName."; host=".$localhost, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit; 
}




?>


