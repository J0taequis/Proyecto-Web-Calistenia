var listaul = ["IH", "PyS", "QS", "H", "Eq", "Contact"];

function mostrarcontenido(a, text) {
    document.getElementById(a).style.display = "block";
    document.getElementById("h1M").innerHTML = text;

    // para ocultar los que no queremos
    for(let i=0; i < listaul.length; i++){
        if(listaul[i] != a){
            document.getElementById(listaul[i]).style.display = "none";
        }
    }  
}

function muestraDatos(){
    const form1 = document.getElementById('form1').value;
    const form2 = document.getElementById('form2').value;
    const form3 = document.getElementById('form3').value;
    alert("Su nombre es: "+form1);
    alert("Su correo es: "+form2);
    alert("El mensaje es: "+form3);
}

// evento asociado al mouse (click en la imagen)

const imagen = document.getElementById('imagen1');
let clickeado = true;

imagen.addEventListener("click", event=> {
    if(clickeado){
        imagen.style.width="40px";
        imagen.style.height="40px";
        clickeado=false;
    }
    else{
        imagen.style.width="50px";
        imagen.style.height="50px";
        clickeado=true;
    }
});