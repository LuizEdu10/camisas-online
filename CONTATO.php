<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['message']);

    $to = "seu-email@dominio.com";
    $subject = "Nova mensagem de contato";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
