
function crearElementoLi(ulpadre,texto){
    let li = document.createElement('li');
    li.innerHTML= texto;
    ulpadre.appendChild(li);
}

async function enviarFormulario(datosFormulario) {
    const response = await fetch('registrousuarios.php', {
        method: 'POST',
        body: datosFormulario,
    });
}


async function guardarMensajeUsuario(datosusuario) { 
    const response = await fetch('informacioncorreo.php', {
        method: 'POST',
        body: datosusuario,
    });

    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

}


async function mostrarCorreosSeleccion(selectInfolU) {
    const response = await fetch('seleccionando.php', {
    });

    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);
    const holiwi = obj.correo;
    crearElementoLi(selectInfolU,holiwi);
}


