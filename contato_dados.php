<?php

$nome = $_POST['nome'];
$mail = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$toText = "lucas.freitas@agenciamd2.com.br";

$subjectText = "Contato | REVESTIMENTOS E ACABAMENTOS";
$msgText = "<font size='2' face='verdana'>";
$msgText .= "Nome: " . $nome . "<br>";
$msgText .= "E-Mail: " . $mail . "<br>";
$msgText .= "Telefone: " . $telefone . "<br>";
$msgText .= "Mensagem: " . $mensagem . "</font>";

if ($nome || $mail || $telefone || $mensagem == "") {
    header('Location: contato.php');
} else {
    mail($toText, $subjectText, $msgText, "From: $nome - $mail\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8");

    echo "<script>alert('Seu e-mail foi enviado com sucesso! Em breve entraremos em contato.');location.href = 'contato.php'</script>";
}
?>