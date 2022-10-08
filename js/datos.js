
let eliminar = 0;

function getVariable(variable){ // traer de variables.js
    return variable;
}

function crearElementoLi(padre,texto){ // para crear elementos li
    let li = document.createElement('li');
    li.innerHTML= texto;
    padre.appendChild(li);
}

function crearElementoSelectOption(padre,texto){ // para crear elementos select
    if(eliminar == 1){
        document.getElementById('respuesta').remove();// elimino el anterior
    }
    let option = document.createElement('option');
    option.setAttribute('id', 'respuesta');
    option.innerHTML= texto;
    padre.appendChild(option);
    eliminar = 0;
}




async function enviarFormulario(datosFormulario) { // inserta en la tabla usuarios un nuevo usuario cuando este se registra
    const response = await fetch('registrousuarios.php', {
        method: 'POST',
        body: datosFormulario
    });
}


async function guardarMensajeUsuario(datosusuario) { // inserta en la base de datos en la tabla contacto lo obtenido del formulario
    const response = await fetch('informacioncorreo.php', {
        method: 'POST',
        body: datosusuario
    });

    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

}


async function mostrarCorreosSeleccion(actual,optionemailspadre) { //muestra los correos de las personas de acuerdo al motivo del reclamo
    const response = await fetch('seleccionando.php', {
        method: 'POST',
        headers:new Headers({'Content-Type': 'application/x-www-form-urlencoded'}),
        body: actual
    });

    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);
    const correos = obj;
    crearElementoSelectOption(optionemailspadre,correos);
    eliminar = 1;
}


