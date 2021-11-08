function EditarCurso() {
    //alert("Editando curso");
}

function EliminarCurso(ID_Curso) {
    //alert("Eliminando curso");
    var form_registro = new FormData();
    form_registro.append('curso', ID_Curso);

    $.ajax({
        data: form_registro,
        url: '/Cubbi_BDM_PWCI/Controladores/db_eliminar_curso.php',
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

function ReActivarCurso(ID_Curso) {
    //alert("ReActivando curso");
    var form_registro = new FormData();
    form_registro.append('curso', ID_Curso);

    $.ajax({
        data: form_registro,
        url: '/Cubbi_BDM_PWCI/Controladores/db_reactivar_curso.php',
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