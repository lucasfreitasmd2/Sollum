<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Restrita - Sollum</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="js/jquery.js"></script>
        <script src="js/login.js"></script>
    </head>
    <body>
        <div class="box_login">
            <figure>
                <img src="img/logo.png" alt=""/>
            </figure>
            <form id="frmLogin">
                <input type="text" id="login" placeholder="Login"/>
                <input type="password" id="senha" placeholder="Senha"/>
                <span id="spanError" class="erroValid"></span>
                <input type="button" value="ENTRAR" id="btnLogin" />
                <a href="nova_senha.php" class="esqueciasenha">Esqueci minha senha</a>
            </form>
        </div>
    </body>
</html>
<?php
echo md5('123mudar');
?>