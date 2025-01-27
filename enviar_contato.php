<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensagem = $_POST['mensagem'];
    $email = $_POST['email'];
    $para = '$email';
    
    $assunto = 'Nova mensagem recebida';
    $headers = 'De: manelocassil69@gmail.com' . "\r\n" .
               'Responder para: ' . $_POST['email'] . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($para, $assunto, $mensagem, $headers);
    echo 'Email enviado com sucesso.';
} else {
    echo 'Erro ao enviar o email.';
}
?>
