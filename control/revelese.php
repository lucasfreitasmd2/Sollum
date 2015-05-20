<?php

require_once '../model/dao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$curriculo = $_POST['curriculo'];


if($nome != '' && $email != '' && $telefone != '' && $cidade != '' && $estado != '' && $curriculo != '') {
    $objRevelese->setNome($nome);
    $objRevelese->setEmail($email);
    $objRevelese->setTelefone($telefone);
    $objRevelese->setCidade($cidade);
    $objRevelese->setEstado($estado);
    $objRevelese->setCurriculo($curriculo);

    $objReveleseDao->cadArquiteto($objRevelese);
}else{
    header('Location: ../');
}