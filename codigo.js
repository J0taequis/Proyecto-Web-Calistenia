
function muestraDatos(){
    const form1 = document.getElementById('form1').value;
    const form2 = document.getElementById('form2').value;
    const form3 = document.getElementById('form3').value;
    alert(form1);
    alert(form2);
    alert(form3);

}


const imagen = document.getElementById('imagen');
imagen.addEventListener('mouseover', (event) => {
    imagen.style.width="500px"
});
