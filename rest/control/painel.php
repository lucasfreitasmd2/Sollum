<?php

@session_start();
require_once '../model/dao.php';


$opcao = $_POST['opcao'];
switch ($opcao) {
    default;
        header('Location: ../');
        break;

    case 'aprovarArquiteto':
        $idArquiteto = addslashes($_POST['idArquiteto']);
        $senha = geraSenha(15);

        $objArquiteto->setIdArquiteto($idArquiteto);
        $objArquiteto->setSenha($senha);

        $objAdminDao->aprovarArquiteto($objArquiteto);
        emailArquiteto($objArquiteto);

        break;

    case 'excluirArquiteto':
        $idArquiteto = addslashes($_POST['idArquiteto']);

        $objArquiteto->setIdArquiteto($idArquiteto);

        $objAdminDao->excluirArquiteto($objArquiteto);
        break;

    case 'login':
        $email = addslashes(strtolower($_POST['email']));
        $senha = addslashes($_POST['senha']);
        
        $objArquiteto->setEmail($email);
        $objArquiteto->setSenha($senha);

        $loginUsuario = $objAdminDao->verificaLogin($objArquiteto);

        //verifica se o usuário existe
        if ($loginUsuario != 0) {
            
            //verifica se o usuário é um arquiteto...
            if ($loginUsuario['nivel'] != 1) {
                $_SESSION['idUsuario'] = $loginUsuario['idArquiteto'];

                print_r('usuario');
                //ou um administrador
            } else {
                $_SESSION['idAdmin'] = $loginUsuario['idArquiteto'];

                print_r('admin');
            }
        }else{
            print_r(-1);
        }
        break;
        
    case 'countFotos':
        $email = $_POST['email'];
        
        $objArquiteto->setEmail($email);
        
        $objAdminDao->countFotos($objArquiteto);
        break;
}

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true) {
    $lmin = 'abcdefghijklmnopqrstuvwxyz';
    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $num = '1234567890';

    $retorno = '';
    $caracteres = '';

    $caracteres .= $lmin;
    if ($maiusculas)
        $caracteres .= $lmai;
    if ($numeros)
        $caracteres .= $num;

    $len = strlen($caracteres);

    for ($n = 1; $n <= $tamanho; $n++) {
        $rand = mt_rand(1, $len);
        $retorno .= $caracteres[$rand - 1];
    }

    return $retorno;
}

function emailArquiteto($objArquiteto) {
    $arquiteto = $objAdminDao->verArquiteto1($objArquiteto);

    mail($arquiteto['email'], 'sua senha no site sollum', $objArquiteto->getSenha());
}
