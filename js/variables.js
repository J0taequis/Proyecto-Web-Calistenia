
const formularioregistro = document.getElementById('register-form'); /*para insertar usuario nuevo en la base de datos*/ 

formularioregistro.addEventListener('submit', function (event) {
    event.preventDefault();
    const formularioData = new FormData(formularioregistro);
    enviarFormulario(formularioData);
});

const formulariocontacto = document.getElementById('form-general-data'); /*para insertar mensaje nuevo en la base de datos*/ 

formulariocontacto.addEventListener('submit', function (event) {
    const textoDeStatus = document.querySelector('.text-div-ul');
    event.preventDefault();
    const formularioDataContacto = new FormData(formulariocontacto);
    guardarMensajeUsuario(formularioDataContacto); /*ojo al tejo*/
    
});


const selectoption = document.getElementById('select-option');  /*para obtener informacion de la base de datos*/ 

selectoption.addEventListener('change',function (event){
    const selectInfolU = document.querySelector('.select-info-ul');
    event.preventDefault();
    mostrarCorreosSeleccion(selectInfolU);
    
})