const dateAria = document.querySelector('.header-date');
const list = document.querySelector('.todo--list');
const input = document.querySelector('.task');
const button = document.querySelector('.todo--bottom-submit');
const form = document.querySelector('.form');

const checked = 'fa-checked';
const unchecked = 'fa-check';
const lineThrough = 'done';

//              DATE ARIA
//              DATE ARIA
//              DATE ARIA



let date = Intl.DateTimeFormat('pl', {
    weekday: 'long',
    month: 'long',
    year: 'numeric'
    } ).format( new Date());




// if (minutes < 10) {
//     minutes.padStart(2, '0');
// }


function getTime() {
    return dateAria.textContent = `${date}`;
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
        
    }, false)
}

function deletingCover(clasS) {
    const deleteButton = document.querySelectorAll('.fa-trash-alt');
    deleteButton[clasS].addEventListener('click', (e) => {
        e.target.parentNode.remove();
        clasSArray.pop(clasS);
    }, false)
}




form.addEventListener('submit', (e) => {
    if(input.value.trim() == '') {
        e.preventDefault();
        input.value = '';
    } else {
        e.preventDefault();
        addItem(input.value.trim());
        input.value = '';
        
    }
});



let clasSArray = [];



// Adding Secition Ended
// Adding Secition Ended
// Adding Secition Ended


