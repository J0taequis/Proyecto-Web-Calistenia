async function insertarUsuario(datosFormulario) { // inserta en la tabla usuarios un nuevo usuario cuando este se registra
    const response = await fetch('register.php', {
        method: 'POST',
        body: datosFormulario
    });
}
