
$(document).ready(function(){

    $(".btn_send").click(function(){
        var txt_comentario = $("[name=comment]").val();
        var ID_curso = $(this).attr("curso");

        console.log(txt_comentario);
        console.log(ID_curso);

        var form_data = new FormData();
        form_data.append('comment', txt_comentario);
        form_data.append('curso', ID_curso);

        console.log(form_data);
        $.ajax({
            data: form_data,
            url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_comentario.php',
            method: 'POST',
            contentType: false,
            processData: false,
        })
        .done(function(result){
            console.log(result);
        })
        
        .fail(function(result){
            console.log(result);
        });
    });
});