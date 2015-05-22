function teste() {
    var fd = new FormData();
//    fd.append('photo', file);
    var form = $("<form method='POST' action='url.php' enctype='multipart/form-data'></form>");

    $("#trabalhos").ajaxForm({
        beforeSend: function () {
            var count = $.post('control/painel.php', {opcao: 'countFotos', email: $("#email").val()},
            function (r) {
                if(r == 10){
                    alert('NÃO PODE');  
                }else{
                    alert('pode');
                }
            });
        },
        uploadProgress: function (event, position, total, percentComplete) {
        },
        complete: function (data) {
        }
    });
}