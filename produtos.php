<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Produtos | Sollum Revesimentos e Acabamentos</title>
        <?php include_once 'includes/head.php'; ?>
    </head>
    <body>     
        <?php include_once 'includes/header.php'; ?>

        <div class="main">
            <h1>Produtos</h1>
            <p>
                Abra o leque de possibilidades que você nunca imaginou para sua obra. Encontre aqui tudo o que precisa para mudar... com estilo, sofisticação e originalidade. 
            </p>
            <p>
                Apresentamos nossos fornecedores e parceiros.
            </p>
            <div class="produtos">
                <?php for($i=1;$i<9;$i++){ ?>
                <div class="i-produtos">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img src="img/produtos/front/duravit.jpg" alt="" />
                            </div>
                            <div class="back">
                                <a href="ver_produtos.php"><img src="img/produtos/back/duravit.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>                
                <?php } ?>
            </div>
        </div>            

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
