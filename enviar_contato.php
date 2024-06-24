<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));

    $to = "darknetpirates@gmail.com";
    $subject = "Mensagem de Contato do Site Cristão";
    $body = "Mensagem:\n$mensagem";
    $headers = "From: noreply@seusite.com\r\n";
    $headers .= "Reply-To: noreply@seusite.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

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
