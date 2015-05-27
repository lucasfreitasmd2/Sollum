<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Restrita - Sollum</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="js/jquery.js"></script>
        <script src="js/painel.js"></script>
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <div class="main">
            <div class="topo">
                <h1>Bem vindo(a)
                    <span>
                        <?php
                        require_once 'model/dao.php';
                        $objArquiteto->setIdArquiteto($_SESSION['idAdmin']);
                        
                        $usuario = $objAdminDao->verArquiteto1($objArquiteto);
                        
                        echo $usuario['nome'];
                        ?></span></h1>
                <div class="exibirpor">
                    <label>Exibir: </label>
                    <select id="selFiltro">
                        <option value="">TODOS</option>
                        <option value="1">APROVADOS</option>
                        <option value="0">AGUARDANDO APROVAÇÃO</option>
                    </select>
                </div>
            </div>
            <p>
                Todos os usuários cadastrados estão abaixo. Clique em <strong>APROVAR</strong> para que o usuário possa continuar o cadastro ou em <strong>EXCLUIR</strong> se o usuário não estiver apto a participar.
            </p>

            <div id="listaArquitetos"></div>

        </div>
    </body>
</html>
