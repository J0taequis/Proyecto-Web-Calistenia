// Sistema de Login y registro

let Login = document.getElementById("login-form");
let Register = document.getElementById("register-form");
let Selector = document.getElementById("selector");

function login() {
    Login.style.left = "50px";
    Register.style.left = "450px";
    Selector.style.left = "0px";
}

function register() {
    Login.style.left = "-400px";
    Register.style.left = "50px";
    Selector.style.left = "120px";
}


const btnOpenLogin = document.querySelector("#login-button");
const systemLogin = document.querySelector("#form-box");
const btnCloseLogin = document.querySelector("#Close-pop-up");


btnOpenLogin.addEventListener("click", ()=>{
    systemLogin.showModal();
})

btnCloseLogin.addEventListener("click", ()=>{
    systemLogin.close();
})
