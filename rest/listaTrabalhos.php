<?php
require_once 'model/dao.php';
$email = $_GET['id'];

$objArquiteto->setEmail($email);

$pasta = $objAdminDao->verPasta($objArquiteto);
$pasta = '../uploads/' . $pasta;


$ponteiro = scandir($pasta);

foreach ($ponteiro as $listar) {

    if ($listar != "." && $listar != ".." && $listar != 'perfil.jpeg' && $listar != 'perfil.jpg' && $listar != 'perfil.png' && $listar != 'perfil.bmp') {
        ?>
        <figure>
            <img src="../uploads/<?php echo $pasta.'/'.$listar; ?>" alt=""/>
            <a href="javascript:excluirFoto(<?php echo "'".$pasta."','".$listar."'"; ?>)" class="adeus"><img src="img/lixeira.png" alt=""/></a>
        </figure>
        <?php
    }
}
?>