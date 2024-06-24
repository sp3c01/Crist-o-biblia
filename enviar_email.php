<?php
// Configurações de e-mail
$destinatario = "lopeechico@gmail.com"; // E-mail onde serão enviadas as mensagens
$assunto = "Mensagem do site cristão";

// Captura os dados do formulário
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Monta o corpo da mensagem
$corpo_mensagem = "E-mail do remetente: $email\n\n";
$corpo_mensagem .= "Mensagem:\n$mensagem";

// Envia o e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($destinatario, $assunto, $corpo_mensagem, $headers)) {
    echo "<p>Mensagem enviada com sucesso!</p>";
} else {
    echo "<p>Ocorreu um erro ao enviar a mensagem.</p>";
}
?>
