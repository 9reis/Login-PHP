<?php
////////////  CONEXÃOA MYSQLI  ////////////

$localhost = "localhost";
$user = "root";
$password = "";
$dbName = "loja";

$conn = mysqli_connect($localhost,$user,$password,$dbName);

$sql = mysqli_query($conn, "SELECT * FROM usuarios");

echo "Existem: " . mysqli_num_rows($sql) . " registros";

?>