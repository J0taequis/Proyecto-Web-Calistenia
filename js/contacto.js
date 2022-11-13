async function insertarMensajeUsuario(datosusuario) { // inserta en la base de datos en la tabla contacto lo obtenido del formulario
    const response = await fetch('insertarmensaje.php', {
        method: 'POST',
        body: datosusuario
    });

    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

    //Mostrar por pantalla estatus
    alert(obj.success);

}
