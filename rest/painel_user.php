<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Restrita - Sollum</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <?php include_once 'header.php'; ?>

        <div class="main">
            <h1>Bem vindo(a) <span>FULANO</span>.</h1>
            <p>
                Preencha o formulário com sua <strong>FOTO DE PERFIL</strong>, <strong>CURRÍCULO COMPLETO</strong> e <strong>FOTOS DE SEUS PROJETOS</strong> para finalizar o cadastro.
            </p>
            <form class="form_user">
                <fieldset>
                    <label>NOME:</label>
                    <input type="text" name="nome"/>                        
                </fieldset>
                <fieldset>
                    <label>E-MAIL:</label>
                    <input type="text" name="nome"/>                        
                </fieldset>
                <fieldset>
                    <label>TELEFONE:</label>
                    <input type="text" name="nome"/>                        
                </fieldset>
                <fieldset>
                    <fieldset>
                        <label>CIDADE:</label>
                        <input type="text" name="nome"/>                        
                    </fieldset>
                    <fieldset>
                        <label>ESTADO:</label>
                        <input type="text" name="nome"/>                        
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>FOTO DE PERFIL:</label>
                    <input type="file" name="fotoPerfil"/>                        
                </fieldset>
                <fieldset>
                    <label>Currículo completo:</label>
                    <textarea name="curriculoCompleto"></textarea>                    
                </fieldset>
                <fieldset>
                    <label>Selecione até 10 fotos dos seus projetos:</label>
                </fieldset>
                <input type="button" value="ALTERAR"/>                  
            </form>
        </div>
    </body>
</html>
