
async function insertarUsuario(datosFormulario) { // inserta en la tabla usuarios un nuevo usuario cuando este se registra
    const response = await fetch('register.php', {
        method: 'POST',
        body: datosFormulario
    });
}


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


async function insertarNuevoEjercicio(datosEjercicio){
    const response = await fetch('agregarejercicio.php', {
        method: 'POST',
        body: datosEjercicio
    });
    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

    //Mostrar por pantalla estatus
    console.log(obj.success);

}


async function eliminarEjercicio(datosEjercicio){
    const response = await fetch('quitarejercicio.php', {
        method: 'POST',
        body: datosEjercicio
    });
    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

    //Mostrar por pantalla estatus
    console.log(obj.success);

}


async function editarEjercicio(datosEjercicio){
    const response = await fetch('editarejercicios.php', {
        method: 'POST',
        body: datosEjercicio
    });
    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

    //Mostrar por pantalla estatus
    console.log(obj.success);

}

async function mostrarRutina(){
    const response = await fetch('editarejercicios.php', {
        method: 'POST',
        body: datosEjercicio
    });
    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

    //Mostrar por pantalla estatus
    console.log(obj.success);

}