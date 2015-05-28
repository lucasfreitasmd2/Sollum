<!--<hr/>-->
<?php
require_once 'model/dao.php';

if (isset($_GET['arquiteto'])) {
    $id = $_GET['arquiteto'];
} else {
    $id = 0;
}


$arquitetos = $objReveleseDao->listaArquitetos($id);
?>
<div class="arquitetos">
    <?php
    $i = 0;

    foreach ($arquitetos as $arquiteto) {

        $caminho = 'uploads/' . $arquiteto['pasta'];
        $imagens = scandir($caminho);
        foreach ($imagens as $imagem) {
            if (stripos($imagem, 'perfil') !== false) {
                $i++;
                $caminho .= '/' . $imagem;
            }
        }

        if ($caminho != 'uploads/' . $arquiteto['pasta']) {
            $imagensExibir .= '
                <div class="i-arquitetos">
                    <a href="arquitetos.php?arquiteto=' . $arquiteto["idArquiteto"] . '">
                        <img src="' . $caminho . '" alt=""/>
                    </a>
                </div>
             ';
        }
    }
    
    if ($i > 0) {
        echo '<h2>Conheça outros arquitetos:</h2>'.$imagensExibir;
    }
    ?>
</div>