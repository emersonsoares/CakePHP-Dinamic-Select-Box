$(document).ready(function() {
    
    if($('#estados').val().length != 0) {
        $.getJSON("home/listar_cidades_json",{
            estadoId: $('#estados').val()
        }, function(cidades) {
            if(cidades != null)
                popularListaDeCidades(cidades, $('#id-cidade').val());
        });
    }
        
    $('#estados').live('change', function() {
        if($(this).val().length != 0) {
            $.getJSON("home/listar_cidades_json",{
                estadoId: $(this).val()
            }, function(cidades) {
                if(cidades != null)
                    popularListaDeCidades(cidades);
            });
        } else 
            popularListaDeCidades(null);
    });
});

function popularListaDeCidades(cidades, idCidade) {
    var options = '<option value>selecione uma cidade</option>';
    if(cidades != null) {
        $.each(cidades, function(index, cidade){
            if(idCidade == index)
                options += '<option selected="selected" value="' + index + '">' + cidade + '</option>';
            else
                options += '<option value="' + index + '">' + cidade + '</option>';
        });
    }
    $('#cidades').html(options);
}

