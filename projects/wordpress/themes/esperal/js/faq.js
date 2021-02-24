
const DISPLAY = 'faq__a_display';
const HIDDEN = 'faq__a_hidden';

const faqC = document.querySelectorAll('.faq__container');
const faqA = document.querySelectorAll('.faq__a');

for(let i = 0; i < faqC.length; i++) {
    faqC[i].addEventListener('click', function() {
        faqA[i].classList.toggle(DISPLAY);
        faqA[i].classList.toggle(HIDDEN);
    })
}