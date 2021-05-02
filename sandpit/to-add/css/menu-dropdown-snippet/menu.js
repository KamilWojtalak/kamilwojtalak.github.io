const hbgC = document.querySelector('.nav__hamburger-c');
const hbg = document.querySelector('.hamburger');
const menu = document.querySelector('.nav__menu');

const HBG_CLOSE = 'hamburger_close';
const MENU_SHOW = 'nav__menu_show';
const MENU_HIDE = 'nav__menu_hide';

hbgC.addEventListener('click', () => {
    hbg.classList.toggle(HBG_CLOSE);
    (menu.classList.contains(MENU_SHOW)) ? menu.classList.add(MENU_HIDE) : menu.classList.remove(MENU_HIDE);
    menu.classList.toggle(MENU_SHOW);

});