const modeSwitch = document.querySelector('.mode__switch-container');
const body = document.querySelector('.body');

const DARK = 'dark-mode';
const WHITE = 'white-mode';

modeSwitch.addEventListener( 'click', toggleMode);

function toggleMode() {
    console.log('siema');
    body.classList.toggle(DARK);
    body.classList.toggle(WHITE);
}