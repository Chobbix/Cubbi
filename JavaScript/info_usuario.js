$(document).ready(function(){

    $(".btn-guarda").click(function(){
        if($("#nickname").val() == "") {
            MostrarMsgBox('Espacios vacios', 'Nickname vacio', 'error');
            return false;
        }

        if($("#pass_new").val() == "") {
            MostrarMsgBox('Espacios vacios', 'Contraseña vacia', 'error');
            return false;
        }

        if($("#pass_confirm").val() == "") {
            MostrarMsgBox('Espacios vacios', 'Contraseña vacia', 'error');
            return false;
        }

        if($("#pass_confirm").val() != $("#pass_new").val()) {
            MostrarMsgBox('Espacios vacios', 'Las contraseñas no son iguales', 'error');
            return false;
        }
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
});