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
    const response = await fetch('listarejercicios.php', {
        method: 'POST',
    });
    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

    //array de keys
    let llaves = ['Idrutina','ejercicio','cantrepeticiones','cantseries','comentario','Idusuario'];

    //Mostrar por pantalla seleccionadas
    console.log(obj.success);
    const gridDivPark = document.getElementsByClassName("grid-div-park"); /* div padre donde iran las rutinas*/
    // eliminamos lo que tenga dentro primero
    while (gridDivPark[0].firstChild){
        gridDivPark[0].removeChild(gridDivPark[0].firstChild);
      };
    //agregar al DOM
    for(let i = 0; i < obj.contador; i++){
        let padreParrafos = document.createElement("div");
        padreParrafos.setAttribute("class","park-description");
        gridDivPark[0].appendChild(padreParrafos);
        for(let j = 0; j < 6; j++){
            let parrafo = document.createElement("p");
            parrafo.innerHTML = llaves[j] + "      -------->        "+obj.success[i][llaves[j]];
            padreParrafos.appendChild(parrafo);
        }
    }

}