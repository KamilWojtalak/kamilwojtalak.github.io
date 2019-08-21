const dateAria = document.querySelector('.header-date');
const list = document.querySelector('.todo--list');
let input = document.querySelector('.task');
let button = document.querySelector('.todo--bottom-submit');
let form = document.querySelector('.form');

const checked = 'fa-checked';
const unchecked = 'fa-check';
const lineThrough = 'done';

//              DATE ARIA
//              DATE ARIA
//              DATE ARIA
let dayOfWeekArray = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];

let MonthsArray = ['Styczeń', 'Luty', 'Marzec','Kwiecień', 'Maj', 'Czeriwec', 'Lipiec',
                    'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień']

const date = new Date();

const dayOfWeek = date.getDay();
const dayOfMonth = date.getDate();
const month = date.getMonth();
const year = date.getFullYear();
const hour = date.getHours();
let minutes = date.getMinutes();

for (let i = 0; i < 10; i++) {
    if (minutes == i) {
        minutes = `0${i}`;
    }
}
function getTime() {
    return dateAria.textContent = `${hour}:${minutes} ${dayOfWeekArray[dayOfWeek]}/${MonthsArray[month]} ${dayOfMonth}/${month}/${year}`;
}
getTime();
setInterval(getTime, 1000);

            //  Adding List Item
            //  Adding List Item
            //  Adding List Item


function addItem(text) {
    let clasS = clasSArray.length;
    clasSArray.push('Something that will take some space and generate array index');
    const item = `
                <li class="todo--list--item clasS${clasS}">
                <i class="fas fa-check "></i>
                <span class="todo--list-text">${text}</span>
                <i class="far fa-trash-alt"></i>
                </li>`;
    
    

                
    list.insertAdjacentHTML("beforeend", item);
    completed(clasS);
    deletingCover(clasS);
}
function completed(clasS){
    const complete = document.querySelectorAll('.fa-check');
    complete[clasS].addEventListener('click', (e) => {
        e.target.classList.toggle('fa-checked');
        e.target.nextElementSibling.classList.toggle('line-through');
        
        // console.log(e.target.nextElementSibling.textContent);
        // e.target.nextElementSibling.parentNode.toggle('span-checked');
        // e.target.nextElementSibling.parentNode.toggle('line-through');
    }, false)
}

function deletingCover(clasS) {
    const deleteButton = document.querySelectorAll('.fa-trash-alt');
    deleteButton[clasS].addEventListener('click', (e) => {
        e.target.parentNode.parentNode.removeChild(e.target.parentNode);
        clasSArray.pop(clasS);
    }, false)
}




button.addEventListener('click', () => {
    if(input.value === '') {
        return;
    } else {
        addItem(input.value);
        input.value = '';
    }
});

input.addEventListener('keyup', (e) => {
    if (e.keyCode == 13) {
        if(input.value === '') {
            return;
        } else {
            addItem(input.value);
            input.value = '';
        }
    }
}); 

let clasSArray = [];



// Adding Secition Ended
// Adding Secition Ended
// Adding Secition Ended

// DELETING
