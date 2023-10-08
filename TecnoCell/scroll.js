function cambiarContenido(idContenedor) {
    var contenedorDerecha = $("#contenido-derecha");
    var contenidoNuevo = $("#" + idContenedor).html();

    contenedorDerecha.fadeOut(200, function () {
        contenedorDerecha.html(contenidoNuevo);
        contenedorDerecha.fadeIn(200);
    });
}