const hbg = document.querySelector('.hamburger__container');
const menu = document.querySelector('.nav__menu');
const closee = document.querySelector('.hamburger-close');

const SHOW = 'nav__menu_show';
const CLOSE_SHOW = 'hamburger-close_show';

hbg.addEventListener('click', () => {
    menu.classList.toggle(SHOW);
    closee.classList.toggle(CLOSE_SHOW);
});

closee.addEventListener('click', () => {
    menu.classList.toggle(SHOW);
    closee.classList.toggle(CLOSE_SHOW);
});

