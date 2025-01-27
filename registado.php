<?php
session_start();
require "connect.php";

$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<input type="hidden" name="email" value="$email">
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registado.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <form action="send_verification_email.php" method="post">
            <h1>Ative a Sua Conta</h1>
            <p>Confira o <strong><?php echo ($email); ?></strong> para verificar a sua conta e começar</p>
            <div class="contain">
            <button class="but"><a class="verificarbut" href="https://mail.google.com/mail/u/3/?pli=1#search/from%3Atiagoemp113%40gmail.com" target="_blank" rel="noopener noreferrer">Abrir Email</a></button>
            <button class="but"><a class="verificarbut" href="index.php">Inicio</a></button>
            </div>
        </form>
    </div>
</body>
</html>
