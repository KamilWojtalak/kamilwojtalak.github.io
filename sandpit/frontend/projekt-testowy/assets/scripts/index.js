//      MOBILE MENU

const hamburger = document.querySelector('.nav__hamburger');
const menu = document.querySelector('.nav__list');

const SHOW = 'nav__list_show';

hamburger.addEventListener( 'click', function() {
    menu.classList.toggle(SHOW);
} );

//      SLIDER


const SLIDER = 'header-';
const DOTS = 'dots_active';

const header = document.querySelector('.header');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');
const dots = document.querySelectorAll('.header__dots');
let sliderCounter = 1;

leftArrow.addEventListener( 'click', leftArrowClicked, false);
rightArrow.addEventListener( 'click', rightArrowClicked, false );
function leftArrowClicked( counter ) {
    if (sliderCounter <= 1 ) {
        sliderToFour();
    } else {
        sliderDecrement();
    }
};

function sliderToFour() {
    dots[sliderCounter - 1].classList.remove( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
    sliderCounter = 4;
    dots[sliderCounter - 1].classList.add( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
    
}

function sliderDecrement() {
    dots[sliderCounter - 1].classList.remove( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
    --sliderCounter;
    dots[sliderCounter - 1].classList.add( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
}

function rightArrowClicked() {
    if (sliderCounter >= 4 ) {
        return sliderToOne();
    } else {
        return sliderIncrement();
    }
}

function sliderToOne() {
    dots[sliderCounter - 1].classList.remove( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
    sliderCounter = 1;
    dots[sliderCounter - 1].classList.add( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
    
}

function sliderIncrement() {
    dots[sliderCounter - 1].classList.remove( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
    ++sliderCounter;
    dots[sliderCounter - 1].classList.add( DOTS );
    header.classList.toggle(SLIDER + sliderCounter);
    
}

for ( i = 0; i < dots.length; i++ ) {
    dots[i].addEventListener( 'click', function(e) {
        let temp = e.target.classList[1][e.target.classList[1].length - 1]; // Last letter of the last class in dots array
        dots[sliderCounter - 1].classList.remove( DOTS );
        header.classList.toggle(SLIDER + sliderCounter);
        sliderCounter = temp;
        dots[sliderCounter - 1].classList.add( DOTS );
        header.classList.toggle(SLIDER + sliderCounter);
    });
}

//      VIDEO

const VIDEO_DISPLAY = 'video__container_display';

const videoImageContainer = document.querySelector( '.section__image-overlay' );
const videoClose = document.querySelector( '.video__close' );
const videoContainer = document.querySelector( '.video__container' );

videoImageContainer.addEventListener('click', function() {
    videoContainer.classList.toggle(VIDEO_DISPLAY);
});

videoClose.addEventListener('click', function() {
    videoContainer.classList.toggle(VIDEO_DISPLAY);
});

//      FIXED NAV
const NAV_DARK = 'nav_dark'
const nav = document.querySelector('.nav');

window.addEventListener('scroll', function(e) {

    if (window.pageYOffset >= 400) {
        nav.classList.add(NAV_DARK);
    } else {
        nav.classList.remove(NAV_DARK);
    }

});

//      FORM

const form = document.querySelector('.form');
const formInput = document.querySelectorAll('.form__input');
const wrappers = document.querySelectorAll('.form__input-wrapper ');
const WRAPPER_CHANGE = 'form__input-wrapper_change';
const RED = 'form__input_red';
const errors = [];

for (let i = 0; i < formInput.length; i++) {
    formInput[i].addEventListener('focus', function() {
        wrappers[i].classList.add(WRAPPER_CHANGE);
    });
}

form.addEventListener('submit', function(e) {
    e.preventDefault();
    const name = document.querySelector('.form__input-name').value;
    const lastname = document.querySelector('.form__input-lastname').value;
    const email = document.querySelector('.form__input-email').value;
    const message = document.querySelector('.form__textarea').value;
    const conditions = document.querySelector('.form__checkbox').checked;
    if (conditions && checkIfEmpty(name, lastname, email, message) && checkIfValid(name, lastname, email, message)) {
        if (window.XMLHttpRequest) { 
            http_request = new XMLHttpRequest();
        } else if (window.ActiveXObject) { 
            http_request = new ActiveXObject("Microsoft.XMLHTTP");
        }


        http_request.open('GET', 'form.php', true);
        http_request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        http_request.send(`name=${name}&lastname=${lastname}&email=${email}%message=${message}`);
        

        document.querySelector('.form__input-name').value = '';
        document.querySelector('.form__input-lastname').value = '';
        document.querySelector('.form__input-email').value = '';
        document.querySelector('.form__textarea').value = '';
    }

});

function resetErrors(count) {
    formInput[count].classList.remove(RED);
}

function checkIfEmpty(...args) {
    for ( let i = 0; i < args.length; i++ ) {
        if ( !args[i].trim() ) {
            invalidInput(i);
            break;
        } else {
            resetErrors(i);
        }
    }

    return true;
}

function invalidInput(count) {
    formInput[count].classList.add(RED);
}

function checkIfValid( name, lastname, email, message ) {
    const nameReg = lastnameReg = /[a-zA-Z]{2,20}/;
    if ( !name.match( nameReg ) ) {
        invalidInput(0);
        return false;

    } else if ( !lastname.match( lastnameReg )) {
    invalidInput(1);
    return false;

    }

    return true;
}