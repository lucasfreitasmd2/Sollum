<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php?arquiteto=arquiteto1">ARQUITETO 1</a> |
        <a href="index.php?arquiteto=arquiteto2">ARQUITETO 2</a> |
        <a href="index.php?arquiteto=arquiteto3">ARQUITETO 3</a> |
        <a href="index.php?arquiteto=arquiteto4">ARQUITETO 4</a> |
        <?php
        $arquiteto = $_GET["arquiteto"];

        if ($arquiteto == "arquiteto1") {
            echo "<h1>Arquiteto 1</h1>";
        } elseif ($arquiteto == "arquiteto2") {
            echo "<h1>Arquiteto 2</h1>";
        } elseif ($arquiteto == "arquiteto3") {
            echo "<h1>Arquiteto 3</h1>";
        } elseif ($arquiteto == "arquiteto4") {
            echo "<h1>Arquiteto 4</h1>";
        } else {
            header("Location: index.php?arquiteto=arquiteto1");
        }
        ?>

    </body>
</html>
