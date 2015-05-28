<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Arquitetos | Sollum Revesimentos e Acabamentos</title>
        <?php include_once 'includes/head.php'; ?>
        <script src="js/init.js"></script>
    </head>
    <body>     
        <?php include_once 'includes/header.php'; ?>

        <div class="main">  
            <div class="curri_arquiteto">
                <?php
                require_once 'model/dao.php';
                $idArquiteto = addslashes($_GET['arquiteto']);
                $perfil = '';
                $projetos = array();
                $i = 0;
                $arquiteto = $objReveleseDao->listaArquiteto1($idArquiteto);

                $caminho = 'uploads/' . $arquiteto['pasta'];
                $imagens = scandir($caminho);
                foreach ($imagens as $imagem) {
                    if ($imagem != '.' && $imagem != '..') {

                        if (stripos($imagem, 'perfil') !== false) {
                            $perfil = $caminho . '/' . $imagem;
                        } else {
                            $projetos[$i] = $caminho . '/' . $imagem;
                            $i++;
                        }
                    }
                }
                ?>
                <h1><?php echo $arquiteto['nome']; ?></h1>
                <figure>
                    <img src="<?php echo $perfil; ?>" alt=""/>
                </figure>
                <p>
                    <?php echo $arquiteto['curriculo']; ?>
                </p>
            </div>
            <div class="projetos_arquiteto">
                <h2>Projetos</h2>
                <div id="content">
                    <div class="wall">
                        <?php
                        foreach ($projetos as $projeto) {
                            echo '<div class="box-photo col3">
                                    <img alt="" src="' . $projeto . '" />
                                  </div>
                                 ';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <hr/>
            <?php include_once 'includes/outros_arquitetos.php'; ?>    
        </div>

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
