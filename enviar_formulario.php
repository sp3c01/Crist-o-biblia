<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Verificar se os dados são válidos
    if ($nome && $email && $mensagem) {
        // Destinatário do email
        $destinatario = "darknetpirates@gmail.com";

        // Assunto do email
        $assunto = "Mensagem de Contato de $nome";

        // Corpo do email
        $corpo = "Nome: $nome\n";
        $corpo .= "Email: $email\n";
        $corpo .= "Mensagem:\n$mensagem";

        // Cabeçalhos do email
        $cabecalhos = "From: $email";

        // Enviar email
        if (mail($destinatario, $assunto, $corpo, $cabecalhos)) {
            echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'contato.html';</script>";
        } else {
            echo "<script>alert('Falha ao enviar a mensagem. Tente novamente mais tarde.'); window.location.href = 'contato.html';</script>";
        }
    } else {
        echo "<script>alert('Dados inválidos. Por favor, preencha todos os campos corretamente.'); window.location.href = 'contato.html';</script>";
    }
} else {
    header("Location: contato.html");
    exit();
}
?>