$(document).ready(function () {
    $("input[type='text'], textarea").blur(function () {
        $('#spanError').fadeOut(500);
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
        } else if (telefone == '') {
            $("#telefone").focus();
            $("#spanError").html('');
            $("#spanError").html('O campo TELEFONE é obrigatório!');
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
        }else{
            $.post('control/revelese.php',{nome:nome, email:email,telefone:telefone,cidade:cidade,estado:estado,curriculo:curriculo},
            function(r){
                if(r == 0){
                    $("#spanError").html('');
                    $("#spanError").html('Este usuário já se encontra cadastrado em nossa base de dados!');
                    $('#spanError').fadeIn('slow');
                }
            });
            
        }
    }
    );
}); 