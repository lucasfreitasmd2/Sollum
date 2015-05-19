<?php
$pg = basename($_SERVER["SCRIPT_NAME"]);
?>

<div class="bgheader">
    <header>
        <div class="logo">
            <a href="./"><img src="img/logo.png" alt=""/></a>
        </div>
    </header>
</div>
<div class="bgmenu">
    <nav class="menu">
        <span class="mob"><img src="img/menu.png" alt="" /></span>
        <ul>
            <li><a href="./" <?php if ($pg == 'index.php') echo "class='atv'"; ?>>Home</a></li>
            <li><a href="empresa.php" <?php if ($pg == 'empresa.php') echo "class='atv'"; ?>>A Empresa</a></li>
            <li><a href="produtos.php" <?php if ($pg == 'produtos.php') echo "class='atv'"; ?>>Produtos</a></li>
            <li><a href="lojas.php" <?php if ($pg == 'lojas.php') echo "class='atv'"; ?>>Lojas</a></li>
            <li><a href="inspire-se.php" <?php if ($pg == 'inspire-se.php') echo "class='atv'"; ?>>Inspire-se</a></li>
            <li><a href="revele-se.php" <?php if ($pg == 'revele-se.php') echo "class='atv'"; ?>>Revele-se</a></li>
            <li><a href="contato.php" <?php if ($pg == 'contato.php') echo "class='atv'"; ?>>Contato</a></li>
        </ul>
    </nav>
</div>    