const btn = document.querySelector('.header--cta');
const main = document.querySelector('.main');
const mainBtn = document.querySelector('.main--btn');
const mainInput = document.querySelector('#imp');
const output = document.querySelector('.output');

btn.addEventListener('click', function() {
    main.scrollIntoView();
},false);

mainBtn.addEventListener('click', function() {
    (palindrome(mainInput.value)) ? output.textContent = 'Palindrome!' : output.textContent = 'Not Palindrome!';
}, false);


function palindrome(str) {
    if(str === '') {
        return false;
    } else {
    return str.replace(/[\W_]/gi, '').toLowerCase() === 
           str.replace(/[\W_]/gi, '').toLowerCase().split('').reverse().join('');
    }
  }