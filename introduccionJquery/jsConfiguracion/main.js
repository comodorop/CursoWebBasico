$(document).ready(function () {

    $("#btnRegistro").click(function () {
        $("#contenedorPrincipal").load("./views/registros.html", function () {
            
            
            $("#btnGuardarModuloRegistros").click(function () {
              var nombre = $("#txtNombre").val();
               swal(nombre);
            });
            
            
        });
    });
    $("#btnVntas").click(function () {
        $("#contenedorPrincipal").load("./views/vntas.html");
    });




});