<?php
$mysqli=mysqli_connect("localhost","root","M27012005m","papsite");

if ($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados: " . $mysqli->connect_error);
}

return $mysqli;
?>