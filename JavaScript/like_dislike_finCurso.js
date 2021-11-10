$(document).ready(function(){
    $(".fa-heart").click(function(){
        var idCurso = $(this).attr("curso");
        var idUsuario = $(this).attr("usuario");
        var opc = 'like';

        var form_registro = new FormData();
        form_registro.append('curso', idCurso);
        form_registro.append('usuario', idUsuario);
        form_registro.append('opc', opc);

        MandarInformacion(form_registro);
    });

    $(".fa-heart-broken").click(function(){
        var idCurso = $(this).attr("curso");
        var idUsuario = $(this).attr("usuario");
        var opc = 'dislike';

        var form_registro = new FormData();
        form_registro.append('curso', idCurso);
        form_registro.append('usuario', idUsuario);
        form_registro.append('opc', opc);

        MandarInformacion(form_registro);
    });

    function MandarInformacion(form) {
        $.ajax({
            data: form,
            url: '/Cubbi_BDM_PWCI/Controladores/db_terminar_curso.php',
            method: 'POST',
            contentType: false,
            processData: false,
        })
        .done(function(result){
            $(location).attr('href','../perfil/perfil.php');
        })
        
        .fail(function(result){
            alert(result);
        });
    }
});