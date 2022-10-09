
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
    guardarMensajeUsuario(formularioDataContacto,textoDeStatus); /*ojo al tejo*/
});


const selectoption = document.getElementById('select-option');  /*para obtener informacion de la base de datos*/ 
const optionemailspadre = document.getElementById('insert-emails'); // insertar nuevo selectoption donde mostrar todos los correos


selectoption.addEventListener('change',function (event){
    let actual = 'motivo=' + encodeURIComponent(selectoption.options[selectoption.selectedIndex].value);
    event.preventDefault();
    mostrarCorreosSeleccion(actual,optionemailspadre);
})


