<?php
@session_start();
if(!isset($_SESSION['idUsuario']) &&  !isset($_SESSION['idAdmin'])){
    header('Location: ./');
}
?>
<header>
    <div class="logo">
        <img src="img/logo.png" alt=""/>
    </div>
    <div class="aux_sup">
        <a href="../">IR PARA O SITE</a>
        <a href="sair.php">SAIR</a>                
    </div>
</header>