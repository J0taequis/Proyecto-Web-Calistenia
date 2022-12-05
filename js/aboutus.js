/* SLIDER DE TEXTO "QUIENES SOMOS" */

let slider = document.getElementById('slider-text');
let active = document.getElementById('active');
let L1 = document.getElementById('l1');
let L2 = document.getElementById('l2');
let L3 = document.getElementById('l3');
let L4 = document.getElementById('l4');

L1.onclick = function() {
    slider.style.transform = 'translateX(0)';
    active.style.top = '0px';
}
L2.onclick = function() {
    slider.style.transform = 'translateX(-33.3%)';
    active.style.top = '120px';
}
L3.onclick = function() {
    slider.style.transform = 'translateX(-66.6%)';
    active.style.top = '240px';
}