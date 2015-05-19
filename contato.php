<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Contato | Sollum Revesimentos e Acabamentos</title>
        <?php include_once 'includes/head.php'; ?>
        <script>
            function validaContato(formulario) {
                if (formulario.nome.value == '') {
                    $('#erroNome').fadeIn('slow'); //se o campo nome estiver vazio, o jquery exibe a div #erroNome que até então estava escondida pelo CSS
                    return false;
                }
                if (formulario.email.value == '') {
                    $('#erroMail').fadeIn('slow'); //se o campo mail estiver vazio, o jquery exibe a div #erroMail que até então estava escondida pelo CSS
                    return false;
                }
                if (validaEmail(formulario.email.value) == false) {
                    $('#erroMail2').fadeIn('slow'); //se o campo mail não conter um ponto ou arroba, ele exibe a div #erroMail2 que até então estava escondida pelo CSS
                    return false;
                }
                if (formulario.telefone.value == '') {
                    $('#erroTel').fadeIn('slow'); //se o campo nome estiver vazio, o jquery exibe a div #erroNome que até então estava escondida pelo CSS
                    return false;
                }
                if (formulario.mensagem.value == '') {
                    $('#erroMsg').fadeIn('slow'); //se o campo mensagem estiver vazio, o jquery exibe a div #erroMsg que até então estava escondida pelo CSS
                    return false;
                }
                if (formulario.mensagem.value.length < 10) {
                    $('#erroMsg2').fadeIn('slow'); //se o campo mensagem for preenchido com menos de 10 caracteres, o jquery exibe a div #erroMsg2 que até então estava escondida pelo CSS
                    return false;
                }
                return true;
            }
            function apagarErro() {
                $('.erroValid').fadeOut(500); //quando um campo é selecionado, ele dispara esta função, que apaga as mensagens de erro exibidas
            }
            function validaEmail(email) {
                er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
                if (er.exec(email))
                    return true;
                else
                    return false;
            }
        </script>
    </head>
    <body>     
        <?php include_once 'includes/header.php'; ?>

        <div class="main">
            <h1>Contato</h1>
            <div class="contato">
                <div class="esq">
                    <form action="contato_dados.php" method="post" onsubmit="return validaContato(this);"> 
                        <fieldset>
                            <label>Nome:</label>
                            <input type="text" name="nome" onblur="return apagarErro();"/>
                            <p class="erroValid" id="erroNome">O campo NOME é obrigatório!</p>
                        </fieldset>
                        <fieldset>
                            <label>E-mail:</label>
                            <input type="text" name="mail" onblur="return apagarErro();"/>
                            <p class="erroValid" id="erroMail">O campo E-MAIL é obrigatório!</p> 
                            <p class="erroValid" id="erroMail2">O E-MAIL que você digitou não é válido!</p>
                        </fieldset>
                        <fieldset>
                            <label>Telefone:</label>
                            <input type="text" name="telefone" onblur="return apagarErro();"/>
                            <p class="erroValid" id="erroTel">O campo TELEFONE é obrigatório!</p>
                        </fieldset>
                        <fieldset>
                            <label>Mensagem:</label>
                            <textarea name="mensagem" onblur="return apagarErro();"></textarea>
                            <p class="erroValid" id="erroMsg">Por favor, digite uma mensagem.</p> 
                            <p class="erroValid" id="erroMsg2">A Mensagem que você digitou é muito curta!</p> 
                        </fieldset>
                        <input type="submit" value="ENVIAR"/>
                    </form>
                </div>
                <div class="dir">
                    <p>
                        <span>ENDEREÇO:</span>
                        Av. das Américas, 16.479, Recreio dos Bandeirantes<br/>
                        Rio de Janeiro, RJ
                    </p>
                    <p>
                        <span>TELEFONES:</span>
                        21 2437-8700 | 21 3326-3294
                    </p>
                    <p>
                        <span>E-MAIL:</span>
                        contato@mukkema.com.br
                    </p>
                </div>
            </div>
        </div>            

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
