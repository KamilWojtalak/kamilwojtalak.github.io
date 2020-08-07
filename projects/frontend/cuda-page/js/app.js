const hamburger = document.querySelector('.header__hamburger-menu');
const menu = document.querySelector('.title-and-nav__nav');

hamburger.addEventListener('click', (e) => {
    menu.classList.toggle('hidden');
}); 