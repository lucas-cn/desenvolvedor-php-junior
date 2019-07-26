$(function($){
    $("#cpf").mask("999.999.999-99");
    $(".cpf").mask("999.999.999-99");

    $("#telefone").mask("(99) 99999-9999");
    $(".telefone").mask("(99) 99999-9999");
});

$('#id-estado').change(function() {
    var cidade= $(this).val();

    var url = window.location.href
    var arr = url.split("/");
    var url = arr[0] + "//" + arr[2];

    $.ajax({
        type: "GET",
        url: url+'/cidades/getByEstado/'+cidade,
        success: function(data){

            var html = "";
            $.each(data, function(i, val){
                html += "<option value='"+val.id_cidade+"'>"+val.cidade+"</option>";
            });
            $('#id-cidade').html(html);

        }
    });
});