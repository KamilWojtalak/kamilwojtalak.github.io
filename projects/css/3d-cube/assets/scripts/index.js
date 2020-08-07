'use strict';


const cube = document.querySelector('.cube');

const inputGroup = document.querySelector('.input-group');

inputGroup.addEventListener( 'click', checkForClick, false);

let position = 'lorem';

function checkForClick () {
    if (document.getElementById( 'front' ).checked) {
        cube.classList.remove(position);
        cube.classList.toggle('show-front');
        position = 'show-front';
    } else if (document.getElementById( 'back' ).checked) {
        cube.classList.remove(position);
        cube.classList.toggle('show-back');
        position = 'show-back';
    } else if (document.getElementById( 'left' ).checked) {
        cube.classList.remove(position);
        cube.classList.toggle('show-left');
        position = 'show-left';
    } else if (document.getElementById( 'right' ).checked) {
        cube.classList.remove(position);
        cube.classList.toggle('show-right');
        position = 'show-right';
    } else if (document.getElementById( 'bottom' ).checked) {
        cube.classList.remove(position);
        cube.classList.toggle('show-bottom');
        position = 'show-bottom';
    } else if (document.getElementById( 'top' ).checked) {
        cube.classList.remove(position);
        cube.classList.toggle('show-top');
        position = 'show-top';
    } else {
        return;
    }
}

