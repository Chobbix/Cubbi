

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
        
        $("[NumeroCap=1]").each(function(index, element){
            alert($(element).text());
        });
    });
});