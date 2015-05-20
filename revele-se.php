<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Arquitetos | Sollum Revesimentos e Acabamentos</title>
        <?php include_once 'includes/head.php'; ?>
        <!--<script src="js/init.js"></script>-->
        <script src="js/jquery.js"></script>
        <script src="js/revele-se.js"></script>
    </head>
    <body>     
        <?php include_once 'includes/header.php'; ?>

        <div class="main">            

            <h1>Revele-se</h1>
            <div class="dir">
                <p>
                    De A a Z, abrimos este espaço exclusivo para os profissionais que dão vida às marcas. De nada adianta a matéria-prima sem a percepção e sensibilidades daqueles que são artesãos do bom gosto, do equilíbrio, da otimização do espaço, com técnica e percepção. 
                </p>
                <p>
                    A <span class="laranja">SOLLUM</span> valoriza decoradores e arquitetos. Exponham aqui as suas obras e projetem novas parcerias e clientes. 
                </p>
                <p> 
                    Preencha o formulário e em breve responderemos.
                </p>
                <p> 
                    Contem conosco.
                </p>                
            </div>
            <div class="esq">
                <form class="form-revel" id="frmRevelese">
                    <fieldset>
                        <input type="text" id="nome" placeholder="Nome" />
                    </fieldset>
                    <fieldset>
                        <input type="text" id="email" placeholder="E-mail" />
                    </fieldset>
                    <fieldset>
                        <input type="text" id="telefone" placeholder="Telefone" />
                    </fieldset>
                    <fieldset>
                        <fieldset>
                            <input type="text" id="cidade" placeholder="Cidade" />
                        </fieldset>
                        <fieldset>
                            <select id="estado">
                                <option value="">Selecione o Estado</option>
                                <option value="ac">Acre</option>
                                <option value="al">Alagoas</option>
                                <option value="ap">Amapá</option>
                                <option value="am">Amazonas</option>
                                <option value="ba">Bahia</option>
                                <option value="ce">Ceará</option>
                                <option value="df">Distrito Federal</option>
                                <option value="es">Espirito Santo</option>
                                <option value="go">Goiás</option>
                                <option value="ma">Maranhão</option>
                                <option value="ms">Mato Grosso do Sul</option>
                                <option value="mt">Mato Grosso</option>
                                <option value="mg">Minas Gerais</option>
                                <option value="pa">Pará</option>
                                <option value="pb">Paraíba</option>
                                <option value="pr">Paraná</option>
                                <option value="pe">Pernambuco</option>
                                <option value="pi">Piauí</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="rn">Rio Grande do Norte</option>
                                <option value="rs">Rio Grande do Sul</option>
                                <option value="ro">Rondônia</option>
                                <option value="rr">Roraima</option>
                                <option value="sc">Santa Catarina</option>
                                <option value="sp">São Paulo</option>
                                <option value="se">Sergipe</option>
                                <option value="to">Tocantins</option>
                            </select>
                        </fieldset>
                    </fieldset>
                    <fieldset>
                        <textarea id="curriculo" placeholder="Escreva um breve currículo sobre você" "></textarea><br />
                        <span id="spanError" class="erroValid"></span>
                    </fieldset>
                    <input type="button" value="Enviar" id="btnRevelese"/>
                </form>
            </div>
            <div class="cl"></div>
            <?php include_once 'includes/outros_arquitetos.php'; ?>    

        </div>

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
