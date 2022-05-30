<?php

require 'conn.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
    require_once 'Usuario.Class.php';
    $u = new Usuario();

    $listLogged = $u->logged($_SESSION['idUser']);
    $nomeUser = $listLogged['nome'];

}else{
    header("Loccation: login.html");
}

?>