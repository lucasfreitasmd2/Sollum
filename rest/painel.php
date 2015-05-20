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
            <div class="topo">
                <h1>Bem vindo <span>FULANO</span></h1>
                <div class="exibirpor">
                    <label>Exibir: </label>
                    <select>
                        <option value="todos">TODOS</option>
                        <option value="aprovados">APROVADOS</option>
                        <option value="aguardando">AGUARDANDO APROVAÇÃO</option>
                    </select>
                </div>
            </div>
            <p>
                Todos os usuários cadastrados estão abaixo. Clique em <strong>APROVAR</strong> para que o usuário possa continuar o cadastro ou em <strong>EXCLUIR</strong> se o usuário não estiver apto a participar.
            </p>
            <?php for($i=0; $i<10; $i++){ ?>
            <div class="cad_usuario">
                <div class="dados">
                    <p>
                        <strong>DADOS PESSOAIS:</strong><br/>
                        Lucas Freitas (<a href="mailto:lucas.freitas@ageciamd2.com.br">lucas.freitas@agenciamd2.com.br</a>)<br/>
                        21 972100629<br/>
                        Rio de Janeiro, RJ
                    </p>
                    <p>
                        <strong>BREVE CURRÍCULO:</strong><br/>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                </div>
                <div class="situ">
                    <a href="#" class="aprovado">APROVADO</a>
                    <a href="#" class="aprovar">APROVAR</a>
                    <a href="#" class="excluir">EXCLUIR</a>
                </div>
            </div>
            <?php } ?>

        </div>
    </body>
</html>
