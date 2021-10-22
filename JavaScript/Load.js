

$(document).ready(function(){

    function AgregarNivel(NumeroCap){
        var html = "<div class='capitulos'>";
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
        var html = "<div class='bloque_nivel'>";
            html += "<h1>Tema " + NumeroTemaInt + "</h1>";
            html += "<div class='cabecera_nivel'>";
            html += "<div class='capitulos'>";
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

    $('.caja_cap').on('click', '.btn_cap', function(){
        console.log($(this));
        var padre= $(this).parent();
        var previo= $(padre).prev();
        
        var NumeroCap= $(this).attr("NumeroCap");
        var NuemroCapInt = parseInt(NumeroCap, 10);
        NuemroCapInt += 1;

        $(this).attr("NumeroCap", NuemroCapInt);

        $(previo).append(AgregarNivel(NuemroCapInt));
    });

    $(".btn_addsec").click(function(){
        var NumeroTema= $(this).attr("NumeroSec");
        var NumeroTemaInt = parseInt(NumeroTema, 10);
        NumeroTemaInt += 1;

        $(this).attr("NumeroSec", NumeroTemaInt);

        $('.caja_cap').append(AgregarSeccion(NumeroTemaInt));
    });

    $(".save_btn").click(function(){
        var titulo = $("#Titulo").val();
        var descripcion = $("#Descripcion").val();
        var categoria = $("#Categoria").val();
        var duracion = $("#Duracion").val();
        var costo = $("#Costo").val();
        var tipoPago = $("#tipodepago").val();

        var form_data = new FormData();
        form_data.append('Titulo', titulo);
        form_data.append('Descripcion', descripcion);
        form_data.append('Categoria', categoria);
        form_data.append('Duracion', duracion);
        form_data.append('Costo', costo);
        form_data.append('TipoPago', tipoPago);
        form_data.append("img", document.getElementById('id_imgCurso').files[0]);
        form_data.append("vid", document.getElementById('id_vidCurso').files[0]);

        console.log(form_data);
        //$.ajax({
        //    data: form_data,
        //    url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_curso.php',
        //    method: 'POST',
        //    contentType: false,
        //    processData: false,
        //})
        //.done(function(result){
        //    console.log(result);
        //})
        
        //.fail(function(result){
        //    console.log(result);
        //});

        $(".bloque_nivel").each(function(index, element){
            var i = index + 1;
            alert("Tema: " + i);

            $($(element).children(".cabecera_nivel").children()).each(function(index, element){
                var iDos = index + 1;
                alert("Capitulo: " + iDos);

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
            });
        });
    });
});

function sendRequest() {
    var theObject = new XMLHttpRequest();
    theObject.open('GET', '/Cubbi_BDM_PWCI/Controladores/db_agregar_curso.php', true);
    theObject.setRequestHeader('Content-Type', 'aplication/x-ww-form-urlencoded');
    theObject.onreadystatechange = function() {
        console.log(theObject.responseText);
    }
    theObject.send();
}