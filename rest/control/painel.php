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
        $pasta = md5($idArquiteto . date('YmdHis'));

        $objArquiteto->setIdArquiteto($idArquiteto);
        $objArquiteto->setSenha($senha);
        $objArquiteto->setPasta($pasta);


        //cria a estrutura de pastas de arquivos
        if (!is_dir('../../uploads')) {
            //cria a pasta raiz de arquivos na primeira vez
            mkdir('../../uploads');
        }
        //cria a pasta de arquivos do usuário
        mkdir('../../uploads/' . $pasta);

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
        } else {
            print_r(-1);
        }
        break;

    case 'countFotos':
        $email = $_POST['email'];

        $objArquiteto->setEmail($email);

        $pasta = $objAdminDao->verPasta($objArquiteto);
        $pasta = '../../uploads/' . $pasta;

        $total = count(scandir($pasta)) - 2;

        print_r($total);
        break;

    case 'cadFotos':

        function reArrayFiles(&$file_post) {

            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

            for ($i = 0; $i < $file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }

            return $file_ary;
        }

        if ($_FILES['fotos']) {
            $fotos = reArrayFiles($_FILES['fotos']);

            $email = $_POST['email'];

            $objArquiteto->setEmail($email);

            $pasta = $objAdminDao->verPasta($objArquiteto);

            $pasta = '../../uploads/' . $pasta;
            foreach ($fotos as $foto) {
                $total = count(scandir($pasta)) - 2;
                $tipoArquivo = pathinfo($foto['name']);
                $tipoArquivo = '.' . $tipoArquivo['extension'];

                if ($total++ <= 10) {
                    move_uploaded_file($foto['tmp_name'], $pasta . '/' . md5($foto['name']) . $tipoArquivo);
                }
            }
        }

        header('Location: ../painel_user.php');
        break;

    case 'atualizaArquiteto':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $curriculo = $_POST['curriculoCompleto'];
        $idArquiteto = $_POST['idArquiteto'];


        $objArquiteto->setNome(addslashes($nome));
        $objArquiteto->setEmail(addslashes($email));
        $objArquiteto->setTelefone(addslashes($telefone));
        $objArquiteto->setCidade(addslashes($cidade));
        $objArquiteto->setEstado(addslashes($estado));
        $objArquiteto->setCurriculo(addslashes($curriculo));
        $objArquiteto->setIdArquiteto(addslashes($idArquiteto));

        if ($_FILES['fotoPerfil']['name'] != '') {
            $pasta = $objAdminDao->verPasta($objArquiteto);
            $tipoArquivo = pathinfo($_FILES['fotoPerfil']['name']);
            $tipoArquivo = '.' . $tipoArquivo['extension'];
            $nome = 'perfil' . $tipoArquivo;
            $caminho = '../../uploads/' . $pasta ;
            
            $arquivos = scandir($caminho);
            foreach($arquivos as $arquivo){
                if(stripos($arquivo,'perfil') !== false){
                    echo $caminho.'/'.$arquivo;
                    unlink($caminho.'/'.$arquivo);
                }
            }
            
            
            move_uploaded_file($_FILES['fotoPerfil']['tmp_name'], $caminho. '/' . $nome);
            
        }

        $objAdminDao->altArquiteto($objArquiteto);

        header('Location: ../painel_user.php');
        break;
        
    case 'excluirFoto':
        $pasta = addslashes($_POST['pasta']);
        $imagem = addslashes($_POST['imagem']);
        
        $caminho = '../../uploads/'.$pasta.'/'.$imagem;
        
        unlink($caminho);
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
