
$(document).ready(function(){


    $("#vid").hide();

    $("[btn=Editar]").click(function(){
        var idCurso = $(this).attr("curso");
        EditarCurso(idCurso);
    });

    $("[btn=Eliminar]").click(function(){
        var idCurso = $(this).attr("curso");
        EliminarCurso(idCurso);
    });

    $("[btn=Re-Activar]").click(function(){
        var idCurso = $(this).attr("curso");
        ReActivarCurso(idCurso);
    });



    if($('#tipodepago').val() == 1 || $('#tipodepago').val() == 3){
        $('#Costo').hide();
        $('#Costoh1').hide();
    }

    if($('#tipodepago').val() == 1 || $('#tipodepago').val() == 2){
        $('.costo').hide();
    }

    function AgregarNivel(NumeroCap){
        var html = "<div class='capitulos' isViejo='false'>";
            html += "<h1>Capitulo " + NumeroCap +"</h1>";
            html += "<div class='contenido'>";
            html += "<div class='nombre_del_subcapitulo'>";
            html += "<h2>Titulo</h2>";
            html += "<input type='text' placeholder=' Titulo del nivel'>";
            html += "</div>";
            html += "<div class='btn_contenidos'>";
            html += "<div class='btn_video1'>";
            html += "<h1> Subir video</h1>";
            html += "<input type='file' name='imagensubida' accept='video/*' class=' btn_enviar'>";
            html += "</div>";
            html += "<div class='btn_video'>";
            html += "<h1> Subir documentos</h1>";
            html += "<input type='file' name='imagensubida' accept='' class='btn_enviar'>";
            html += "</div>";
            html += "<div class='costo' id='boxcosto'>";
            html += "<h1>Costo:</h1>";
            html += "<input type='text'>";
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "</div>";
        return html;
    }

    function AgregarSeccion(NumeroTemaInt){
        var html = "<div class='bloque_nivel' isViejo='false'>";
            html += "<h1>Tema " + NumeroTemaInt + "</h1>";
            html += "<div class='cabecera_nivel'>";
            html += "<div class='capitulos' isViejo='false'>";
            html += "<h1>Capitulo 1</h1>";
            html += "<div class='contenido'>";
            html += "<div class='nombre_del_subcapitulo'>";
            html += "<h2>Titulo</h2>";
            html += "<input type='text' placeholder=' Titulo del nivel'>";
            html += "</div>";
            html += "<div class='btn_contenidos'>";
            html += "<div class='btn_video1'>";
            html += "<h1> Subir video</h1>";
            html += "<input type='file' name='imagensubida' accept='video/*' class=' btn_enviar'>";
            html += "</div>";
            html += "<div class='btn_video'>";
            html += "<h1> Subir documentos</h1>";
            html += "<input type='file' name='imagensubida' accept='' class='btn_enviar'>";
            html += "</div>";
            html += "<div class='costo' id='boxcosto'>";
            html += "<h1>Costo:</h1>";
            html += "<input type='text'>";
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "<div class='btd_addchap'>";
            html += "<button class='plus btn_cap' NumeroSec='" + NumeroTemaInt + "' NumeroCap='1'>";
            html += "<i class='fas fa-plus-circle'></i>";
            html += "<h5>Agregar otro capitulo</h5>";
            html += "</button>";
            html += "</div>";
            html += "</div>";
        return html;
    }

    $('.add_categoria').click(function(){
        var txt_Cat = $('#Categoria').val()
        console.log(txt_Cat);
        var cantidad = $('#Cat_select option').length;
        var newCantidad = cantidad + 1;
        $('#Cat_select').append('<option value='+ newCantidad +'>'+ txt_Cat +'</option>');
        $('#Categoria').val('');

        var form_categoria = new FormData();
        form_categoria.append('txt_categoria', txt_Cat);

        $.ajax({
            data: form_categoria,
            url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_categoria.php',
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

    $('#Cat_select').on('change',function(){
        var valor = $(this).val();
        console.log(valor);
    });

    $('#tipodepago').on('change',function(){
        var valor = $(this).val();
        if(valor == 1) {
            $('#Costo').hide();
            $('#Costoh1').hide();
            $('.costo').hide();
        }

        if(valor == 3) {
            $('#Costo').hide();
            $('#Costoh1').hide();
            $('.costo').show();
        }

        if(valor == 2) {
            $('#Costo').show();
            $('#Costoh1').show();
            $('.costo').hide();
        }
    });

    $('.caja_cap').on('click', '.btn_cap', function(){
        console.log($(this));
        var padre= $(this).parent();
        var previo= $(padre).prev();
        
        var NumeroCap= $(this).attr("NumeroCap");
        var NuemroCapInt = parseInt(NumeroCap, 10);
        NuemroCapInt += 1;

        $(this).attr("NumeroCap", NuemroCapInt);

        $(previo).append(AgregarNivel(NuemroCapInt));

        if($('#tipodepago').val() == 1 || $('#tipodepago').val() == 2){
            $('.costo').hide();
        }
    });

    $(".btn_addsec").click(function(){
        var NumeroTema= $(this).attr("NumeroSec");
        var NumeroTemaInt = parseInt(NumeroTema, 10);
        NumeroTemaInt += 1;

        $(this).attr("NumeroSec", NumeroTemaInt);

        $('.caja_cap').append(AgregarSeccion(NumeroTemaInt));
        
        if($('#tipodepago').val() == 1 || $('#tipodepago').val() == 2){
            $('.costo').hide();
        }
    });

    $("[btnGuardar=Agregar]").click(function(){
        var titulo = $("#Titulo").val();
        var descripcion = $("#Descripcion").val();
        var categoria = $("#Cat_select").val();
        var duracion = $("#Duracion").val();
        var costo = $("#Costo").val();
        var tipoPago = $("#tipodepago").val();

        if(tipoPago == 1 || tipoPago == 3) { costo = 0; }
        console.log(categoria);

        var form_data = new FormData();
        form_data.append('Titulo', titulo);
        form_data.append('Descripcion', descripcion);
        form_data.append('Cat_select', categoria);
        form_data.append('Duracion', duracion);
        form_data.append('Costo', costo);
        form_data.append('TipoPago', tipoPago);
        form_data.append("img", document.getElementById('id_imgCurso').files[0]);
        form_data.append("vid", document.getElementById('id_vidCurso').files[0]);

        console.log(form_data);
        $.ajax({
            data: form_data,
            url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_curso.php',
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

        $(".bloque_nivel").each(function(index, element){
            var i = index + 1;

            var form_datasec = new FormData();
            form_datasec.append('ID_Seccion', i);

            $.ajax({
                data: form_datasec,
                url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_temas.php',
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

            $($(element).children(".cabecera_nivel").children()).each(function(index, element){
                var iDos = index + 1;

                var divContenido = $(element).children(".contenido");
                var divContenidos = $(divContenido).children(".btn_contenidos");

                var tituloCap = $($(divContenido).children(".nombre_del_subcapitulo").children("input")).val();
                var vidCap = $($(divContenidos).children(".btn_video1").children("input"))[0].files[0];
                var docsCap = $($(divContenidos).children(".btn_video").children("input"))[0].files[0];
                var costoCap = $($(divContenidos).children(".costo").children("input")).val();

                console.log(tituloCap);
                console.log(vidCap);
                console.log(docsCap);
                console.log(costoCap);

                if($('#tipodepago').val() == 1 || $('#tipodepago').val() == 2){
                    costoCap = 0;
                }

                var form_dataCap = new FormData();
                form_dataCap.append('ID_Seccion', i);
                form_dataCap.append('ID_Capitulo', iDos);
                form_dataCap.append('Titulo', tituloCap);
                form_dataCap.append('Costo', costoCap);
                form_dataCap.append('Video', vidCap);
                form_dataCap.append('Doc', docsCap);

                $.ajax({
                    data: form_dataCap,
                    url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_capitulos.php',
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

        MostrarMsgBox('Curso Agregado', 'Su curso fue agregado exitosamente', 'success');
        $(location).attr('href',"../perfil/perfil.php");
    });

    $("[btnGuardar=Editar]").click(function(){
        var titulo = $("#Titulo").val();
        var idCurso = $('#Titulo').attr('ID_Curso');
        var descripcion = $("#Descripcion").val();
        var duracion = $("#Duracion").val();
        var costo = $("#Costo").val();
        var tipoPago = $("#tipodepago").val();

        var form_data = new FormData();
        form_data.append('Titulo', titulo);
        form_data.append('curso', idCurso);
        form_data.append('Descripcion', descripcion);
        form_data.append('Duracion', duracion);
        form_data.append('Costo', costo);
        form_data.append('TipoPago', tipoPago);
        form_data.append("img", document.getElementById('id_imgCurso').files[0]);
        form_data.append("vid", document.getElementById('id_vidCurso').files[0]);

        console.log(form_data);
        $.ajax({
            data: form_data,
            url: '/Cubbi_BDM_PWCI/Controladores/db_modificar_curso.php',
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

        $(".bloque_nivel").each(function(index, element){

            var i = index + 1;
            var isViejo= $(element).attr("isViejo");

            if(isViejo != "true") {
                var form_datasec = new FormData();
                form_datasec.append('ID_Seccion', i);
                form_datasec.append('ID_Curso', idCurso);

                $.ajax({
                    data: form_datasec,
                    url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_temas_by_curso.php',
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
            }

            $($(element).children(".cabecera_nivel").children()).each(function(index, element){
                var iDos = index + 1;

                var divContenido = $(element).children(".contenido");
                var divContenidos = $(divContenido).children(".btn_contenidos");

                var tituloCap = $($(divContenido).children(".nombre_del_subcapitulo").children("input")).val();
                var vidCap = $($(divContenidos).children(".btn_video1").children("input"))[0].files[0];
                var docsCap = $($(divContenidos).children(".btn_video").children("input"))[0].files[0];
                var costoCap = $($(divContenidos).children(".costo").children("input")).val();

                console.log(tituloCap);
                console.log(vidCap);
                console.log(docsCap);
                console.log(costoCap);

                if($('#tipodepago').val() == 1 || $('#tipodepago').val() == 2){
                    costoCap = 0;
                }

                var form_dataCap = new FormData();
                form_dataCap.append('ID_Curso', idCurso);
                form_dataCap.append('ID_Seccion', i);
                form_dataCap.append('ID_Capitulo', iDos);
                form_dataCap.append('Titulo', tituloCap);
                form_dataCap.append('Costo', costoCap);
                form_dataCap.append('Video', vidCap);
                form_dataCap.append('Doc', docsCap);

                var isViejo= $(element).attr("isViejo");

                if(isViejo != "true") {
                    $.ajax({
                        data: form_dataCap,
                        url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_capitulos_by_curso.php',
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
                } else {
                    $.ajax({
                        data: form_dataCap,
                        url: '/Cubbi_BDM_PWCI/Controladores/db_modificar_capitulos.php',
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
                }
            });
        });

        MostrarMsgBox('Curso Modificado', 'Su curso fue modificado exitosamente', 'success');
    });
});

function MostrarMsgBox(titulo, descripcion, icono){
    Swal.fire({
        title: titulo,
        text: descripcion,
        icon: icono,
        background: '#B8B7C9',
        confirmButtonText: 'OK'
    });
}

function sendRequest() {
    var theObject = new XMLHttpRequest();
    theObject.open('GET', '/Cubbi_BDM_PWCI/Controladores/db_agregar_curso.php', true);
    theObject.setRequestHeader('Content-Type', 'aplication/x-ww-form-urlencoded');
    theObject.onreadystatechange = function() {
        console.log(theObject.responseText);
    }
    theObject.send();
}

function sendRequest() {
    var theObject = new XMLHttpRequest();
    theObject.open('GET', '/Cubbi_BDM_PWCI/Controladores/db_agregar_curso.php', true);
    theObject.setRequestHeader('Content-Type', 'aplication/x-ww-form-urlencoded');
    theObject.onreadystatechange = function() {
        console.log(theObject.responseText);
    }
    theObject.send();
}

function sendRequest() {
    var theObject = new XMLHttpRequest();
    theObject.open('GET', '/Cubbi_BDM_PWCI/Controladores/db_agregar_curso.php', true);
    theObject.setRequestHeader('Content-Type', 'aplication/x-ww-form-urlencoded');
    theObject.onreadystatechange = function() {
        console.log(theObject.responseText);
    }
    theObject.send();
}