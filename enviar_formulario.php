<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));

    $to = "darknetpirates@gmail.com";
    $subject = "Mensagem de Contato do Site Cristão";
    $body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: obrigado.html");
        exit();
    } else {
        echo "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }
} else {
    header("Location: contato.html");
    exit();
}
?>
