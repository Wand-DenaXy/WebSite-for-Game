<?php 

session_start();
if($_SESSION["user_id"])
{
    require "connect.php";
    $_SESSION[""];
    session_unset();
    session_destroy();
    header("Location: index.php");
}
else
    echo "Precisa-se de registar primeiro!";
?>