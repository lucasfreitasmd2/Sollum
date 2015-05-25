<?php
@session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Restrita - Sollum</title>
        <script src="js/jquery.js"></script>
        <!--<script src="http://malsup.github.io/jquery.form.js"></script>--> 
        <script src="js/arquitetos.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <?php
        include_once 'header.php';
        require_once 'model/dao.php';

        $idArquiteto = $_SESSION['idUsuario'];

        $objArquiteto->setIdArquiteto($idArquiteto);

        $arquiteto = $objAdminDao->verArquiteto1($objArquiteto);
        ?>

        <div class="main">
            <h1>Bem vindo(a) <span><?php echo $arquiteto["nome"] ?></span>.</h1>
            <p>
                Preencha o formulário com sua <strong>FOTO DE PERFIL</strong>, <strong>CURRÍCULO COMPLETO</strong> e <strong>FOTOS DE SEUS PROJETOS</strong> para finalizar o cadastro.
            </p>
            <form class="form_user" id="frmAltArquiteto" method='POST' action='control/painel.php' enctype='multipart/form-data'>                        
                <input type="hidden" name="opcao" value="atualizaArquiteto" /><br />
                <input type="hidden" name="idArquiteto" value="<?php echo $idArquiteto; ?>" /><br />
                <fieldset>
                    <label>NOME:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $arquiteto['nome']; ?>" /><br />
                    <span id="spanNome" class="erroValid"></span>
                </fieldset>
                <fieldset>
                    <label>E-MAIL:</label>
                    <input type="text" id="email" name="email" value="<?php echo $arquiteto['email']; ?>" /><br />
                    <span id="spanEmail" class="erroValid"></span>
                </fieldset>
                <fieldset>
                    <label>TELEFONE:</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $arquiteto['telefone']; ?>" /><br />
                    <span id="spanTelefone" class="erroValid"></span>
                </fieldset>
                <fieldset>
                    <fieldset>
                        <label>CIDADE:</label>
                        <input type="text" id="cidade" name="cidade" value="<?php echo $arquiteto['cidade']; ?>" /><br />
                        <span id="spanCidade" class="erroValid"></span>
                    </fieldset>
                    <fieldset>
                        <label>ESTADO:</label>
                        <input type="text" id="estado" name="estado" value="<?php echo $arquiteto['estado']; ?>" /><br />
                        <span id="spanEstado" class="erroValid"></span>
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>FOTO DE PERFIL:</label>
                    <?php
                    $pasta = '../uploads/' . $arquiteto['pasta'];


                    $ponteiro = scandir($pasta);

                    foreach ($ponteiro as $listar) {

                        if ($listar == "perfil.jpg" || $listar == "perfil.jpeg" || $listar == "perfil.png" || $listar == "perfil.gif") {
                            echo '
                            <figure id="figureId">
                                <img src="' . $pasta . '/' . $listar . '" alt=""/>
                            </figure>
                            ';
                        }
                    }
                    ?>
                    <input type="file" name="fotoPerfil" id="fotoPerfil" /><br />
                    <span id = "spanFoto" class = "erroValid"></span>
                </fieldset>
                <fieldset>
                    <label>Currículo completo:</label>
                    <textarea name="curriculoCompleto" id="curriculoCompleto"><?php echo $arquiteto['curriculo']; ?></textarea><br />
                    <span id = "spanCurriculo" class = "erroValid"></span>
                </fieldset>
                <input type = "button" value = "SALVAR" id = "btnAltArquiteto"/>
            </form>
            <div class = "upload_fotos">
                <h3>
                    Siga os passos abaixo para fazer o upload das fotos dos projetos:
                </h3>
                <p>
                    Passo 1: Clique em <strong>SELECT FILES</strong> e selecione no máximo <strong>10 fotos</strong><br/>
                    Passo 2: Espere a barra de upload sumir<br/>
                    Passo 3: Pronto!O upload foi finalizado!
                </p>

                <div>
                    <form id = "trabalhos" method = 'POST' action = 'control/painel.php' enctype = 'multipart/form-data'>
                        <fieldset>
                            <input type = "file" multiple = "true" name = "fotos[]" accept = "image/*" size = "10" id = "fotos" />
                            <input type = "hidden" value = "cadFotos" name = "opcao">
                            <input type = "hidden" name = "email" value = "<?php echo $arquiteto['email']; ?>">
                        </fieldset>
                        <input type = "submit" value = "FAZER UPLOAD!" onclick = "teste()" />

                    </form>
                </div>
                <div id = "divTrabalhos">

                </div>
            </div>
        </div>
    </body>
</html>