<?php

if(isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['senha']) && !empty($_POST['senha'])){
    
    require "conn.php";
    require "Usuario.Class.php";

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email,$senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: home.php");
        }else {
            header("Location: index.html");
        }

    }else{
        header("Location: index.html");
    }

}else{
    header("Location: index.html");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Home</h1>
    
    
</body>
</html>