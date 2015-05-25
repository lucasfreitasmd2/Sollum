<?php

require_once '../model/dao.php';
require_once '../model/revelese.php';

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$curriculo = addslashes($_POST['curriculo']);


if ($nome != '' && $email != '' && $telefone != '' && $cidade != '' && $estado != '' && $curriculo != '') {

    $objRevelese->setNome($nome);
    $objRevelese->setEmail($email);
    $objRevelese->setTelefone($telefone);
    $objRevelese->setCidade($cidade);
    $objRevelese->setEstado($estado);
    $objRevelese->setCurriculo($curriculo);

    $verificaUsuario = $objReveleseDao->verificaArquiteto($objRevelese);

    if ($verificaUsuario == 1) {
        $retorno = 0;
    } else {
        $retorno = 1;

        $objReveleseDao->cadArquiteto($objRevelese);
    }

    print_r($retorno);

    //enviar email
    $mensagem = $nome.' Enviou solicitou uma aprovação para se revelar no site';
    $para = $email;
    $subjectText = "Revele-se | REVESTIMENTOS E ACABAMENTOS";
    $msgText = "<font size='2' face='verdana'>";
    $msgText .= "Nome: " . $nome . "<br>";
    $msgText .= "E-Mail: " . $mail . "<br>";
    $msgText .= "Telefone: " . $telefone . "<br>";
    $msgText .= "Mensagem: " . $mensagem . "</font>";

    if ($nome == '' && $mail == '' && $telefone = '' && $mensagem == "") {
        header('Location: contato.php');
    } else {
        mail($para, $subjectText, $msgText, "From: $nome - $email\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8");
    }
} else {
    header('Location: ../');
}