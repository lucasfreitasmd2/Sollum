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
                <input type="hidden" name="opcao" value="atualizaArquiteto" style="display: none;"/>
                <input type="hidden" name="idArquiteto" value="<?php echo $idArquiteto; ?>" />
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
                        <!--<input type="text" id="estado" name="estado" value="<?php echo $arquiteto['estado']; ?>" /><br />-->
                        <select id="estado" name="estado">
                            <option value="">Selecione o Estado</option>
                            <option value="ac" <?php
                            if ($arquiteto['estado'] == 'ac') {
                                echo 'selected';
                            }
                            ?>>Acre</option>
                            <option value="al" <?php
                            if ($arquiteto['estado'] == 'al') {
                                echo 'selected';
                            }
                            ?>>Alagoas</option>
                            <option value="ap" <?php
                            if ($arquiteto['estado'] == 'ap') {
                                echo 'selected';
                            }
                            ?>>Amapá</option>
                            <option value="am" <?php
                            if ($arquiteto['estado'] == 'am') {
                                echo 'selected';
                            }
                            ?>>Amazonas</option>
                            <option value="ba" <?php
                            if ($arquiteto['estado'] == 'ba') {
                                echo 'selected';
                            }
                            ?>>Bahia</option>
                            <option value="ce" <?php
                            if ($arquiteto['estado'] == 'ce') {
                                echo 'selected';
                            }
                            ?>>Ceará</option>
                            <option value="df" <?php
                            if ($arquiteto['estado'] == 'df') {
                                echo 'selected';
                            }
                            ?>>Distrito Federal</option>
                            <option value="es" <?php
                            if ($arquiteto['estado'] == 'es') {
                                echo 'selected';
                            }
                            ?>>Espirito Santo</option>
                            <option value="go" <?php
                            if ($arquiteto['estado'] == 'go') {
                                echo 'selected';
                            }
                            ?>>Goiás</option>
                            <option value="ma" <?php
                            if ($arquiteto['estado'] == 'ma') {
                                echo 'selected';
                            }
                            ?>>Maranhão</option>
                            <option value="ms" <?php
                            if ($arquiteto['estado'] == 'ms') {
                                echo 'selected';
                            }
                            ?>>Mato Grosso do Sul</option>
                            <option value="mt" <?php
                            if ($arquiteto['estado'] == 'mt') {
                                echo 'selected';
                            }
                            ?>>Mato Grosso</option>
                            <option value="mg" <?php
                            if ($arquiteto['estado'] == 'mg') {
                                echo 'selected';
                            }
                            ?>>Minas Gerais</option>
                            <option value="pa" <?php
                            if ($arquiteto['estado'] == 'pa') {
                                echo 'selected';
                            }
                            ?>>Pará</option>
                            <option value="pb" <?php
                            if ($arquiteto['estado'] == 'pb') {
                                echo 'selected';
                            }
                            ?>>Paraíba</option>
                            <option value="pr" <?php
                            if ($arquiteto['estado'] == 'pr') {
                                echo 'selected';
                            }
                            ?>>Paraná</option>
                            <option value="pe" <?php
                            if ($arquiteto['estado'] == 'pe') {
                                echo 'selected';
                            }
                            ?>>Pernambuco</option>
                            <option value="pi" <?php
                            if ($arquiteto['estado'] == 'pi') {
                                echo 'selected';
                            }
                            ?>>Piauí</option>
                            <option value="rj" <?php
                            if ($arquiteto['estado'] == 'rj') {
                                echo 'selected';
                            }
                            ?>>Rio de Janeiro</option>
                            <option value="rn" <?php
                            if ($arquiteto['estado'] == 'rn') {
                                echo 'selected';
                            }
                            ?>>Rio Grande do Norte</option>
                            <option value="rs" <?php
                            if ($arquiteto['estado'] == 'rs') {
                                echo 'selected';
                            }
                            ?>>Rio Grande do Sul</option>
                            <option value="ro" <?php
                            if ($arquiteto['estado'] == 'ro') {
                                echo 'selected';
                            }
                            ?>>Rondônia</option>
                            <option value="rr" <?php
                            if ($arquiteto['estado'] == 'rr') {
                                echo 'selected';
                            }
                            ?>>Roraima</option>
                            <option value="sc" <?php
                            if ($arquiteto['estado'] == 'sc') {
                                echo 'selected';
                            }
                            ?>>Santa Catarina</option>
                            <option value="sp" <?php
                            if ($arquiteto['estado'] == 'sp') {
                                echo 'selected';
                            }
                            ?>>São Paulo</option>
                            <option value="se" <?php
                            if ($arquiteto['estado'] == 'se') {
                                echo 'selected';
                            }
                            ?>>Sergipe</option>
                            <option value="to" <?php
                            if ($arquiteto['estado'] == 'to') {
                                echo 'selected';
                            }
                            ?>>Tocantins</option>
                        </select>
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
                                                    <img src="' . $pasta . '/' . $listar . '" alt="" height="220"/>
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
            <div class="upload_fotos">
                <h3>
                    Siga os passos abaixo para fazer o upload das fotos dos projetos:
                </h3>
                <p>
                    Passo 1: Clique em <strong>ESCOLHER ARQUIVOS</strong> e selecione no máximo <strong>10 fotos</strong><br/>
                    Passo 2: Espere até a página recarregar<br/>
                    Passo 3: Pronto! O upload de suas fotos já foi feito.
                </p>

                <div>
                    <form id = "trabalhos" method = 'POST' action = 'control/painel.php' enctype = 'multipart/form-data'>
                        <fieldset>
                            <input type = "file" multiple = "true" name = "fotos[]" accept = "image/*" size = "10" id = "fotos" />
                            <input type = "hidden" value = "cadFotos" name = "opcao">
                            <input type = "hidden" name = "email" value = "<?php echo $arquiteto['email']; ?>">
                        </fieldset>
                        <input type="submit" value = "FAZER UPLOAD!" onclick = "teste()" />

                    </form>
                </div>
                <div id = "divTrabalhos">
                </div>
            </div>
        </div>
    </body>
</html>