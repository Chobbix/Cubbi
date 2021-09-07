$(document).ready(function(){
    function MostrarMsgBox(titulo, descripcion, icono){
        Swal.fire({
            title: titulo,
            text: descripcion,
            icon: icono,
            background: '#B8B7C9',
            confirmButtonText: 'OK'
        });
    }

    $(".add-carrito").click(function(){
        MostrarMsgBox("Curso agregado al carrito", "Espero que te guste el curso", "success");
        return false;
    });
});