const boxes = document.querySelectorAll('.faq__box');
const aBoxes = document.querySelectorAll('.faq__a');

const SHOW_BOXES = 'faq__a_show';
const HIDE_BOXES = 'faq__a_hide';
const MINUS = 'faq__box_show';

for (let i = 0; i < boxes.length; i++) {
    const box = boxes[i];
    const a = aBoxes[i];
    box.addEventListener('click', (e) => {
        box.classList.toggle(MINUS);

        a.classList.toggle(SHOW_BOXES);
        a.classList.toggle(HIDE_BOXES);
    });
}