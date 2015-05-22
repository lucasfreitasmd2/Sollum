<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Restrita - Sollum</title>
        <script src="js/jquery.js"></script>
        <script src="http://malsup.github.io/jquery.form.js"></script> 
        <script src="js/fotos.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <?php
        @session_start();
        include_once 'header.php';
        require_once 'model/dao.php';

        $idArquiteto = $_SESSION['idUsuario'];

        $objArquiteto->setIdArquiteto($idArquiteto);

        $arquiteto = $objAdminDao->verArquiteto1($objArquiteto);
        ?>

        <div class="main">
            <h1>Bem vindo(a) <span><?php $arquiteto["nome"] ?></span>.</h1>
            <p>
                Preencha o formulário com sua <strong>FOTO DE PERFIL</strong>, <strong>CURRÍCULO COMPLETO</strong> e <strong>FOTOS DE SEUS PROJETOS</strong> para finalizar o cadastro.
            </p>
            <form class="form_user">
                <fieldset>
                    <label>NOME:</label>
                    <input type="text" id="nome" value="<?php echo $arquiteto['nome']; ?>" />                        
                </fieldset>
                <fieldset>
                    <label>E-MAIL:</label>
                    <input type="text" id="email" value="<?php echo $arquiteto['email']; ?>" />                        
                </fieldset>
                <fieldset>
                    <label>TELEFONE:</label>
                    <input type="text" id="telefone" value="<?php echo $arquiteto['telefone']; ?>" />                        
                </fieldset>
                <fieldset>
                    <fieldset>
                        <label>CIDADE:</label>
                        <input type="text" id="cidade" value="<?php echo $arquiteto['cidade']; ?>" />                        
                    </fieldset>
                    <fieldset>
                        <label>ESTADO:</label>
                        <input type="text" id="estado" value="<?php echo $arquiteto['estado']; ?>" />                        
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>FOTO DE PERFIL:</label>
                    <figure class="input_perfil">
                        <img src="https://blogdigicad.files.wordpress.com/2014/12/477878.jpg" alt=""/>
                    </figure>                      
                    <input type="file" name="fotoPerfil"/>  
                </fieldset>
                <fieldset>
                    <label>Currículo completo:</label>
                    <textarea name="curriculoCompleto"></textarea>                    
                </fieldset>
                <input type="button" value="SALVAR"/>
            </form>
            <div class="upload_fotos">
                <h3>
                    Siga os passos abaixo para fazer o upload das fotos dos projetos:
                </h3>
                <p>
                    Passo 1: Clique em <strong>SELECT FILES</strong> e selecione no máximo <strong>10 fotos</strong><br/>
                    Passo 2: Espere a barra de upload sumir<br/>
                    Passo 3: Pronto! O upload foi finalizado!
                </p>

                <!--
                COLOCAR AQUI O SCRIPT DE UPLOAD
                -->
                <div>
                    <form id="trabalhos" method='POST' action='control/url.php' enctype='multipart/form-data'>                        
                        <!--input type="button" value="upload" id="uploadify" /-->
                        <fieldset>
                            <input type="file" multiple="true">
                        </fieldset>
                        <input type="submit" value="FAZER O UPLOAD DESTA MERDA!" onclick="teste()" />
                        
                    </form>
                </div>
                <div id="divTrabalhos">
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <figure>
                        <img src="https://blogdigicad.files.wordpress.com/2014/12/477878.jpg" alt=""/>
                    </figure>
                <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>
