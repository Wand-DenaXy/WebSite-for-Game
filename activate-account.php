<?php
// Inclui o arquivo de conexão ao banco de dados
$mysqli = require "./connect2.php";
 
// Verifica se a conexão foi estabelecida corretamente
if (!$mysqli instanceof mysqli) {
    die("Falha ao conectar ao banco de dados.");
}
 
// Obtém o token da URL
$token = $_GET['token'] ?? '';
 
if (empty($token)) {
    die("Token inválido.");
}
 
// Calcula o hash do token
$token_hash = hash("sha256", $token);
 
// Prepara a consulta SQL para buscar o usuário com o token de ativação
$sql = "SELECT * FROM registrar WHERE account_activation_hash = ?";
$stmt = $mysqli->prepare($sql);
 
if (!$stmt) {
    die("Erro na preparação do statement: " . $mysqli->error);
}
 
// Faz o bind do parâmetro e executa a consulta
$stmt->bind_param("s", $token_hash);
$stmt->execute();
 
// Obtém o resultado da consulta
$result = $stmt->get_result();
$user = $result->fetch_assoc();
 
if ($user === null) {
    die("Token não encontrado.");
}
 
// Prepara a consulta SQL para atualizar o hash de ativação do usuário
$sql = "UPDATE registrar SET account_activation_hash = NULL WHERE user_id = ?";
$stmt = $mysqli->prepare($sql);
 
if (!$stmt) {
    die("Erro na preparação do statement: " . $mysqli->error);
}
 
// Faz o bind do parâmetro e executa a atualização
$stmt->bind_param("i", $user["user_id"]);
$stmt->execute();
 
if ($stmt->affected_rows === 0) {
    die("Erro ao ativar a conta. Por favor, tente novamente.");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Conta Ativada</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
 
    <h1>Conta Ativada</h1>
<p>Conta ativada com sucesso. Agora você pode <a href="login1.php">fazer login</a>.</p>
 
</body>
</html>