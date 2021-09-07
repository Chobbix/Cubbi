$(document).ready(function(){

    function AgregarNivel(){
        var html = "<div class='capitulos'>";
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
            html += "</div>";
            html += "</div>";
            html += "</div>";
        return html;
    }

    function AgregarSeccion(){
        var html = "<div class='bloque_nivel'>";
            html += "<h1>Seccion1</h1>";
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
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "<div class='btd_addchap'>";
            html += "<button class='plus btn_cap'>";
            html += "<i class='fas fa-plus-circle'></i>";
            html += "<h5>Agregar otro capitulo</h5>";
            html += "</button>";
            html += "</div>";
            html += "</div>";
        return html;
    }

    $('.btd_addchap').on('click', '.btn_cap', function(){
            console.log($(this));
            var padre= $(this).parent();
            var previo= $(padre).prev();
            $(previo).append(AgregarNivel());
    });

    $(".btn_addsec").click(function(){
        $('.caja_cap').append(AgregarSeccion());
    });
});