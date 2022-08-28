var listaul = ["IH", "PyS", "QS", "H", "Eq", "Contact"];

function mostrarcontenido(a, text) {
    document.getElementById(a).style.display = "block";
    document.getElementById("h1M").innerHTML = text

    // para ocultar los que no queremos
    for(let i=0; i < listaul.length; i++){
        if(listaul[i] == a){
            i++;
        }
        else{
            document.getElementById(listaul[i]).style.display = "none"
        }
    }
}

function muestraDatos(){
    const form1 = document.getElementById('form1').value;
    const form2 = document.getElementById('form2').value;
    const form3 = document.getElementById('form3').value;
    alert(form1);
    alert(form2);
    alert(form3);
}