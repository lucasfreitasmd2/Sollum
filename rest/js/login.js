function logar() {
    var email = $("#login").val().trim();
    var senha = $("#senha").val().trim();

    if (email == '') {
        $("#login").focus();
        $("#spanError").html('');
        $("#spanError").html('O campo EMAIL é obrigatório!');
        $('#spanError').fadeIn('slow');
    }else if(senha == ''){
        $("#senha").focus();
        $("#spanError").html('');
        $("#spanError").html('O campo SENHA é obrigatório!');
        $('#spanError').fadeIn('slow');
    }else {
        $.post('control/painel.php', {opcao: 'login', email: email, senha: senha},
        function (r) {
            
            if (r == 'usuario') {
                window.location = 'painel_user.php';
            } else {
                window.location = 'painel.php';
            }
        })
    }
}
$(document).ready(function () {
    $("input[type='text'], textarea").blur(function () {
        $('#spanError').fadeOut(500);
    });

    $("#btnLogin").click(function () {
        logar();
    });

    $('#frmLogin').keypress(function (e) {
        /* * verifica se o evento é Keycode (para IE e outros browsers) * se não for pega o evento Which (Firefox) */
        var tecla = (e.keyCode ? e.keyCode : e.which);
        /* verifica se a tecla pressionada foi o ENTER */
        if (tecla == 13) {
            logar();
        }
    });
})