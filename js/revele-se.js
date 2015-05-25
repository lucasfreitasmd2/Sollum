function validaEmail(email) {
    er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
    if (er.exec(email))
        return true;
    else
        return false;
}

function validaTelefone(telefone) {
    var er = /^[0-9]/;
    var valido = '';
    if (er.exec(telefone)) {
        valido = true;
    } else {
        valido = false;
    }

    if (valido === false || telefone.length > 11 || telefone.length < 10) {
        valido = false;
    }else{
        valido = true;
    }
    
    return valido;
}

$(document).ready(function () {
    $("input[type='text'], textarea").blur(function () {
        $('#spanError').fadeOut(500);
    });

    $("#telefone").blur(function () {
        var telefone = $("#telefone").val().trim();

        if (validaTelefone(telefone) === false) {
            $("#telefone").focus();
            $("#spanError").html('');
            $("#spanError").html('O TELEFONE que você digitou não é válido');
            $('#spanError').fadeIn('slow');
        }
    });

    $("#btnRevelese").click(function () {
        var nome = $("#nome").val().trim();
        var email = $("#email").val().trim();
        var telefone = $("#telefone").val().trim();
        var cidade = $("#cidade").val().trim();
        var estado = $("#estado").val();
        var curriculo = $("#curriculo").val().trim();


        if (nome == '') {
            $("#nome").focus();
            $("#spanError").html('');
            $("#spanError").html('O campo NOME é obrigatório!');
            $('#spanError').fadeIn('slow');
        } else if (email == '') {
            $("#email").focus();
            $("#spanError").html('');
            $("#spanError").html('O campo EMAIL é obrigatório!');
            $('#spanError').fadeIn('slow');
        } else if (validaEmail(email) === false) {
            $("#email").focus();
            $("#spanError").html('');
            $("#spanError").html('O E-MAIL que você digitou não é válido!');
            $('#spanError').fadeIn('slow');
        } else if (telefone == '') {
            $("#telefone").focus();
            $("#spanError").html('');
            $("#spanError").html('O campo TELEFONE é obrigatório!');
            $('#spanError').fadeIn('slow');
        } else if (validaTelefone(telefone) === false) {
            $("#telefone").focus();
            $("#spanError").html('');
            $("#spanError").html('O TELEFONE que você digitou não é válido');
            $('#spanError').fadeIn('slow');
        } else if (cidade == '') {
            $("#cidade").focus();
            $("#spanError").html('');
            $("#spanError").html('O campo CIDADE é obrigatório!');
            $('#spanError').fadeIn('slow');
        } else if (estado == '') {
            $("#estado").focus();
            $("#spanError").html('');
            $("#spanError").html('O campo ESTADO é obrigatório!');
            $('#spanError').fadeIn('slow');
        } else if (curriculo == '') {
            $("#curriculo").focus();
            $("#spanError").html('');
            $("#spanError").html('O campo CURRÍCULO é obrigatório!');
            $('#spanError').fadeIn('slow');
        } else {
            $.post('control/revelese.php', {nome: nome, email: email, telefone: telefone, cidade: cidade, estado: estado, curriculo: curriculo},
            function (r) {
                if (r == 0) {
                    $("#spanError").html('');
                    $("#spanError").html('Este usuário já se encontra cadastrado em nossa base de dados!');
                    $('#spanError').fadeIn('slow');
                }
            });

        }
    }
    );
}); 