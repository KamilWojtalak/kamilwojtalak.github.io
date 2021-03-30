const hamburger = document.querySelector('.nav__hamburger');
const menu = document.querySelector('.nav__menu');

const DISPLAY = "nav__menu_display";
const HIDDEN = "nav__menu_hidden";

const OPEN = "nav__hamburger_open";
const CLOSE = "nav__hamburger_close";

function nav() {

    if ( menu.classList[1] == DISPLAY ) {
        menu.classList.remove(DISPLAY);
        menu.classList.add(HIDDEN);
        
        hamburger.classList.remove(OPEN);
        hamburger.classList.add(CLOSE);
    } else {
        menu.classList.remove(HIDDEN);
        menu.classList.add(DISPLAY);

        hamburger.classList.remove(CLOSE);
        hamburger.classList.add(OPEN);
    }
}

hamburger.addEventListener( 'click', nav, false );