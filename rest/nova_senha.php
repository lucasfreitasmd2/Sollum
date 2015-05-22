<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Restrita - Sollum</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div class="box_login">
            <figure>
                <img src="img/logo.png" alt=""/>
            </figure>
            <form>
                <input type="email" name="email" <?php if(isset($_GET['email'])){ echo 'value="'.$_GET['email'].'"'; } ?> required/>
                <input type="password" name="senha" placeholder="Nova senha"/>
                <input type="password" name="senha" placeholder="Repita a nova senha"/>
                <input type="button" value="ALTERAR"/>
            </form>
        </div>
    </body>
</html>
