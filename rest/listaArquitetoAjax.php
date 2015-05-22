<?php
require_once 'model/dao.php';

if(isset($_GET['filtro'])){
    $filtro = $_GET['filtro'];
}else{
    $filtro = '';
}
$arquitetos = $objAdminDao->listaArquiteto($filtro);

foreach ($arquitetos as $arquiteto) {
    ?>
    <div class="cad_usuario">
        <div class="dados">
            <p>
                <strong>DADOS PESSOAIS:</strong><br/>
                <?php echo $arquiteto['nome']; ?> (<a href="mailto:<?php echo $arquiteto['email']; ?>"><?php echo $arquiteto['email']; ?></a>)<br/>
                <?php echo $arquiteto['telefone']; ?><br/>
                <?php echo $arquiteto['cidade'] . ', ' . $arquiteto['estado']; ?>
            </p>
            <p>
                <strong>BREVE CURRÍCULO:</strong><br/>
                <?php echo $arquiteto['curriculo']; ?>
            </p>
        </div>
        <div class="situ">
            <?php
            if ($arquiteto['status'] == 1) {
                echo '<a href="#" class="aprovado">APROVADO</a>';
            } else {
                echo '<a href="javascript:aprovar('.$arquiteto["idArquiteto"].')" class="aprovar">APROVAR</a>';
            }
            ?>
            <a href="javascript:excluir(<?php echo $arquiteto["idArquiteto"]; ?>)" class="excluir">EXCLUIR</a>
        </div>
    </div>
<?php } ?>