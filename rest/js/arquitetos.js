$(document).ready(function () {

    if ($("#divTrabalhos").length) {
        $("#divTrabalhos").load('listaTrabalhos.php?id=' + $("#email").val());
    }

    $("#btnAltArquiteto").click(function () {
        var nome = $("#nome").val();
        var email = $("#email").val();
        var telefone = $("#telefone").val();
        var cidade = $("#cidade").val();
        var estado = $("#estado").val();
        var fotoPerfil = $("#fotoPerfil").val();
        var curriculo = $("#curriculoCompleto").val()

        if (nome == '') {
            $("#nome").focus();
            $("#spanNome").html('');
            $("#spanNome").html('O campo NOME é obrigatório!');
            $('#spanNome').fadeIn('slow');
        } else if (email == '') {
            $("#email").focus();
            $("#spanEmail").html('');
            $("#spanEmail").html('O campo EMAIL é obrigatório!');
            $('#spanEmail').fadeIn('slow');
        } else if (telefone == '') {
            $("#telefone").focus();
            $("#spanTelefone").html('');
            $("#spanTelefone").html('O campo TELEFONE é obrigatório!');
            $('#spanTelefone').fadeIn('slow');
        } else if (cidade == '') {
            $("#cidade").focus();
            $("#spanCidade").html('');
            $("#spanCidade").html('O campo CIDADE é obrigatório!');
            $('#spanCidade').fadeIn('slow');
        } else if (estado == '') {
            $("#estado").focus();
            $("#spanEstado").html('');
            $("#spanEstado").html('O campo ESTADO é obrigatório!');
            $('#spanEstado').fadeIn('slow');
        } else if ($("#figureId").length < 0 && fotoPerfil == '') {
            $("#fotoPerfil").focus();
            $("#spanFoto").html('');
            $("#spanFoto").html('O campo FOTO DE PERFIL é obrigatório!');
            $('#spanFoto').fadeIn('slow');
        } else if (curriculo == '') {
            $("#curriculo").focus();
            $("#spanCurriculo").html('');
            $("#spanCurriculo").html('O campo CURRÍCULO COMPLETO é obrigatório!');
            $('#spanCurriculo').fadeIn('slow');
        }else{
            $("#frmAltArquiteto").submit();
        }
    });


    $("#frmAltArquiteto input[type='file'], #frmAltArquiteto input[type='text'], #frmAltArquiteto textarea").blur(function () {
        $('.erroValid').fadeOut(500);
    })
});
function teste() {
    var fd = new FormData();
//    fd.append('photo', file);

    $("#trabalhos").ajaxForm({
        beforeSend: function (data) {
            $.post('control/painel.php', {opcao: 'countFotos', email: $("#email").val()},
            function (r) {
                var count = document.getElementById('fotos').files.length;

                console.log(r);

                var sum = parseInt(r) + parseInt(count);

                if (sum > 10) {
                    alert("Você não pode fazer mais de 10 uploads");
                    data.abort();
                }
            });
        },
        uploadProgress: function (event, position, total, percentComplete) {
        },
        complete: function (data) {
//            console.log(data.responseText);
            $("#divTrabalhos").load('listaTrabalhos.php?id=' + $("#email").val());
            $("#fotos").val('');
        }
    });
}