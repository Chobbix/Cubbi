$(document).ready(function(){

    $(".enviar").click(function(){
        var idUsuario = $(this).attr("usuario");
        var idCurso = $(this).attr("curso");
        var isFormEscuela = $(this).attr("isFormEscuela");
        var txtMensaje = $(this).prev().val();

        console.log(idUsuario);
        console.log(idCurso);
        console.log(isFormEscuela);
        console.log(txtMensaje);
        AgregarMensajeAjax(idUsuario, idCurso, txtMensaje, isFormEscuela);
    });

    function AgregarMensajeAjax(usuario, curso, mensaje, isFormEscuela) {
        var form_registro = new FormData();
        form_registro.append('usuario', usuario);
        form_registro.append('curso', curso);
        form_registro.append('mensaje', mensaje);
        form_registro.append('isFormEscuela', isFormEscuela);

        $.ajax({
            data: form_registro,
            url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_mensaje.php',
            method: 'POST',
            contentType: false,
            processData: false,
        })
        .done(function(result){
            console.log(result);
            $(location).attr('href',"");
        })
        
        .fail(function(result){
            alert(result);
        });
    }
});