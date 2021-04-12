const nav = document.querySelector('.nav');
const hbg = document.querySelector('.hamburger__container');


hbg.addEventListener('click', () => {
    nav.classList.toggle('nav_display');
});