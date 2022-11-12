const formulariocontacto = document.getElementById('form-general-data'); /*para insertar mensaje nuevo en la base de datos*/ 

formulariocontacto.addEventListener('submit', function (event) {
    event.preventDefault();
    const formularioDataContacto = new FormData(formulariocontacto);
    insertarMensajeUsuario(formularioDataContacto); 
});