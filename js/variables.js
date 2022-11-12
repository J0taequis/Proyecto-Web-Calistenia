const formularioregistro = document.getElementById('register-form'); /*para insertar usuario nuevo en la base de datos*/ 

formularioregistro.addEventListener('submit', function (event) {
    event.preventDefault();
    const formularioData = new FormData(formularioregistro);
    insertarUsuario(formularioData); 
});


