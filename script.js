let btnMenu = document.getElementById('abrirMenu');
let menu = document.getElementById('menu-mobile');
let overLay = document.getElementById('overlay-menu');


btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-Menu');
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-Menu');
})
overLay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-Menu');
})