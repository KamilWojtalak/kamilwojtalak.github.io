
const checkedCLASS = 'fa-checked';
const unchekedCLASS = 'fa-check';
const lineThroughCLASS = 'line-through';

//              DATE ARIA
//              DATE ARIA
//              DATE ARIA
const dateAria = document.querySelector('.header__date');

const date = Intl.DateTimeFormat('pl', {
    weekday: 'long',
    month: 'long',
    year: 'numeric'
    } ).format( new Date());

function getTime() {
    return dateAria.textContent = `${date}`;
}
getTime();
setInterval(getTime, 1000);

            //  Adding List Item
            //  Adding List Item
            //  Adding List Item

const list = document.querySelector('.container__list');
const counterArray = [];


function addItem(array, text) {
    const counter = array.length;

    createElement(counter, text);
    addCheckListener(counter);
    addDeleteListener(counter);

    return array.push('something');
}

function createElement(counter, text) {
    const listItem = document.createElement('li');
    const leftIcon = document.createElement('i');
    const span = document.createElement('span');
    const rightIcon = document.createElement('i');

    listItem.classList.add('container__item');
    listItem.classList.add(counter);
    leftIcon.classList.add("fas");
    leftIcon.classList.add("fa-check");
    span.classList.add('list__span');
    rightIcon.classList.add('far');
    rightIcon.classList.add('fa-trash-alt');


    function appendElement(text) {
        listItem.appendChild(leftIcon);
        listItem.appendChild(span);
        listItem.appendChild(rightIcon);
        list.appendChild(listItem);
        span.textContent = text;
    }

    appendElement(text);
}

function addCheckListener(counter){
    let checkListener = document.querySelectorAll('.fa-check');
    checkListener[counter].addEventListener('click', (e) => {
        e.target.classList.toggle(checkedCLASS);
        e.target.nextElementSibling.classList.toggle(lineThroughCLASS);
    }, false)
}

function addDeleteListener(counter) {
    const deleteButton = document.querySelectorAll('.fa-trash-alt');
    deleteButton[counter].addEventListener('click', (e) => {
        e.target.parentNode.remove();
        counterArray.pop(counter);
    }, false)
}

//              FORM HANDLING
//              FORM HANDLING
//              FORM HANDLING   

const input = document.querySelector('.bottom__form__input');
const button = document.querySelector('.bottom__form__button');
const form = document.querySelector('.bottom__form');




form.addEventListener('submit', (e) => {
    if(input.value.trim() == '') {
        e.preventDefault();
        input.value = '';
    } else {
        e.preventDefault();
        addItem(counterArray ,input.value.trim());
        input.value = '';
        
    }
});







// Adding Secition Ended
// Adding Secition Ended
// Adding Secition Ended


