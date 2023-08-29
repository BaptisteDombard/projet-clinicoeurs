// burger menu

let burgerbtn = document.querySelector('.header__nav-burger');
let linkslist = document.querySelector('.header__nav-links');
let line1 = document.querySelector('.line1');
let line2 = document.querySelector('.line2');
let line3 = document.querySelector('.line3');

function toggle_burger(){
    burgerbtn.addEventListener('click',()=>{
        line1.classList.toggle('toggle-line1');
        line2.classList.toggle('toggle-line2');
        line3.classList.toggle('toggle-line3');
        linkslist.classList.toggle('menu-toggle');
        document.querySelector('.main').classList.toggle('no-main');
        document.querySelector('.footer').classList.toggle('no-main');
    })
}
toggle_burger();