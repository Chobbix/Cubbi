$(document).ready(function(){
    $(".btn-eliminar").click(function(){
        var primer= $(this).parent();
        var segundo= primer.parent();
        $(segundo).slideUp();

        console.log(primer);
        console.log(segundo);
    });
});