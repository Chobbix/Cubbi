$(document).ready(function(){

    const expresiones = {
        usuario: /^[a-zA-Z0-9\_\-]{1,30}$/, // Letras, numeros, guion y guion_bajo
        nombre: /^[a-zA-Z\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
        password1: new RegExp("^(?=.*[A-Z])"),
        password2: new RegExp("^(?=.*[0-9])"),
        password3: new RegExp("^(?=.*[!#$%&'*+/=?^_`{|}.~-])"),
        correo: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/,
        telefono: /^\d{7,14}$/ // 7 a 14 numeros.
    };

    function ValidarVacios(txt){
        if(txt.length == 0) return true;
        else return false;
    }

    function MostrarMsgBox(titulo, descripcion, icono){
        Swal.fire({
            title: titulo,
            text: descripcion,
            icon: icono,
            background: '#B8B7C9',
            confirmButtonText: 'OK'
        });
    }

    $(".btn-inicio").click(function(){

        if(ValidarVacios($("[vali=nom]").val())) {
            MostrarMsgBox('Espacios vacios', 'Revisa la informacion', 'error');
            return false;
        }

        if(ValidarVacios($("[vali=apes]").val())) {
            MostrarMsgBox('Espacios vacios', 'Revisa la informacion', 'error');
            return false;
        }

        if(ValidarVacios($("[vali=email]").val())) {
            MostrarMsgBox('Espacios vacios', 'Revisa la informacion', 'error');
            return false;
        }

        if(ValidarVacios($("[vali=Fnac]").val())) {
            MostrarMsgBox('Espacios vacios', 'Revisa la informacion', 'error');
            return false;
        }

        if(ValidarVacios($("[vali=contra]").val())) {
            MostrarMsgBox('Espacios vacios', 'Revisa la informacion', 'error');
            return false;
        }
        
        var isNombreValid= expresiones.nombre.test($("[vali=nom]").val());
        var isApesValid= expresiones.nombre.test($("[vali=apes]").val());
        var isEmailValid= expresiones.correo.test($("[vali=email]").val());
        
        if (!isNombreValid) {
            MostrarMsgBox('Nombre Invalido', 'Solo se permiten letras en el apartado Nombre', 'error');
            return false;
        }

        if (!isApesValid) {
            MostrarMsgBox('Apellidos Invalido', 'Solo se permiten letras en el apartado Apellidos', 'error');
            return false;
        }

        if (!isEmailValid) {
            MostrarMsgBox('Email Invalido', 'Sintaxis del correo incorrecta ejemplo: ejemplo@gmail.com', 'error');
            return false;
        }

        var isPasswordValid1= expresiones.password1.test($("[vali=contra]").val());
        var isPasswordValid2= expresiones.password2.test($("[vali=contra]").val());
        var isPasswordValid3= expresiones.password3.test($("[vali=contra]").val());
        
        if($("[vali=contra]").val().length < 8) {
            MostrarMsgBox('Contraseña Invalida', 'Es necesario por lo menos una longitud de 8 caracteres', 'error');
            return false;
        }

        if(!isPasswordValid1) {
            MostrarMsgBox('Contraseña Invalida', 'Es necesario por lo menos una mayuscula', 'error');
            return false;
        }

        if(!isPasswordValid2) {
            MostrarMsgBox('Contraseña Invalida', 'Es necesario por lo menos un numero', 'error');
            return false;
        }

        if(!isPasswordValid3) {
            MostrarMsgBox('Contraseña Invalida', 'Es necesario por lo menos un caracter especial', 'error');
            return false;
        }

        if($("[vali=contra]").val() != $("[vali=contraConfi]").val()) {
            MostrarMsgBox('Contraseña Invalida', 'Las contraseñas no coinciden entre si', 'error');
            return false;
        }
    });
});