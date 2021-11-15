$(document).ready(function(){
    var precio;
    var idTema;
    var idCurso;
    var isRegistrado = false;
    var isCursoPorCapitulos = false;

    $(".btn_diseño_cap").click(function(){
        var hijo = $(this).children("a");
        var TemaComprar = $(hijo).attr("Tema");
        console.log(TemaComprar);
        $(".temaComprar").text('Tema ' + TemaComprar);
        $(".temaComprar").attr("idtema", TemaComprar);

        precio = $(hijo).attr("Precio");
        idCurso = $(hijo).attr("Curso");
        idTema = TemaComprar;
        isCursoPorCapitulos = true;

        if(precio == 0) {
            if(isRegistrado == false){
                isRegistrado = true;
                AgregarRegistroAjax(idCurso, precio, 3);
            }

            var padre = $("[Tema=" + idTema + "]").parent();
            $("[Tema=" + idTema + "]").remove();
            padre.replaceWith('<h2 class="comprado">Tema Comprado</h2>');

            AgregarAcceso(idCurso, idTema);
            MostrarMsgBox("Registrado y comprado el tema con exito", "Espero que te guste el curso", "success");
            $(location).attr('href','#');

        }
    });

    $(".btn_diseño").click(function(){
        precio = $(this).attr("Precio");
        idCurso = $(this).attr("Curso");

        if(precio == 0) {
            if(isRegistrado == false){
                isRegistrado = true;
                AgregarRegistroAjax(idCurso, precio, 3);
            }
            MostrarMsgBox("Registrado y comprado con exito", "Espero que te guste el curso", "success");
            $(location).attr('href','../elcurso/vista.php?curso='+ idCurso);
        }
    });

    paypal.Buttons({
        
        style: {
            shape: 'pill',
            color: 'blue',
            layout: 'horizontal',
            label: 'paypal',
        },

        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{"amount":{"currency_code":"MXN","value":precio}}]
            });
        },

        onApprove: function(data, actions) {
            if(isRegistrado == false){
                isRegistrado = true;
                AgregarRegistroAjax(idCurso, precio, 2);
            }

            if(isCursoPorCapitulos) {
                var padre = $("[Tema=" + idTema + "]").parent();
                $("[Tema=" + idTema + "]").remove();
                padre.replaceWith('<h2 class="comprado">Tema Comprado</h2>');

                AgregarAcceso(idCurso, idTema);
                MostrarMsgBox("Registrado y comprado el tema con exito", "Espero que te guste el curso", "success");
                $(location).attr('href','#');

            } else {
                MostrarMsgBox("Registrado y comprado con exito", "Espero que te guste el curso", "success");
                $(location).attr('href','../elcurso/vista.php?curso='+ idCurso);
            }
        },

        onError: function(err) {
            alert(err);
        }

    }).render('#paypal-button-container');

    $("#PagarTarjetaCredito").click(function(){
        if(isRegistrado == false){
            isRegistrado = true;
            AgregarRegistroAjax(idCurso, precio, 1);
        }

        if(isCursoPorCapitulos) {
            var padre = $("[Tema=" + idTema + "]").parent();
            $("[Tema=" + idTema + "]").remove();
            padre.replaceWith('<h2 class="comprado">Tema Comprado</h2>');

            AgregarAcceso(idCurso, idTema);
            MostrarMsgBox("Registrado y comprado el tema con exito", "Espero que te guste el curso", "success");
            $(location).attr('href','#');

        } else {
            MostrarMsgBox("Registrado y comprado con exito", "Espero que te guste el curso", "success");
            $(location).attr('href','../elcurso/vista.php?curso='+ idCurso);
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

    function AgregarRegistroAjax(curso, precio, tPago) {
        var form_registro = new FormData();
        form_registro.append('curso', curso);
        form_registro.append('precio', precio);
        form_registro.append('tPago', tPago);

        $.ajax({
            data: form_registro,
            url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_registro_curso.php',
            method: 'POST',
            contentType: false,
            processData: false,
        })
        .done(function(result){
            console.log(result);
        })
        
        .fail(function(result){
            alert(result);
        });
    }

    function AgregarAcceso(curso, tema) {
        var form_registro = new FormData();
        form_registro.append('curso', curso);
        form_registro.append('seccion', tema);

        $.ajax({
            data: form_registro,
            url: '/Cubbi_BDM_PWCI/Controladores/db_agregar_accesos.php',
            method: 'POST',
            contentType: false,
            processData: false,
        })
        .done(function(result){
            console.log(result);
        })
        
        .fail(function(result){
            alert(result);
        });
    }

});