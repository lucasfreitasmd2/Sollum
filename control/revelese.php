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
} else {
    header('Location: ../');
}