function aprovar(id){
    if(confirm("Você tem certeza que deseja aprovar esse Arquiteto?") === true){
        $.post('control/painel.php',{opcao:'aprovarArquiteto',idArquiteto:id},
        function(){
            $("#listaArquitetos").load('listaArquitetoAjax.php');
        });
    }
}

function excluir(id){
    if(confirm("Você tem certeza que deseja excluir esse Arquiteto?") === true){
        $.post('control/painel.php',{opcao:'excluirArquiteto',idArquiteto:id},
        function(){
            $("#listaArquitetos").load('listaArquitetoAjax.php');
        });
    }
}


$(document).ready(function(){
    if($("#listaArquitetos").length){
        $("#listaArquitetos").load('listaArquitetoAjax.php');
    }
    
    $("#selFiltro").change(function(){
        var filtro = $("#selFiltro").val();
        
        $("#listaArquitetos").load('listaArquitetoAjax.php?filtro='+filtro);
    })
})