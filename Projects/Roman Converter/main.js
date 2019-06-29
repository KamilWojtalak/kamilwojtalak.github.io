const btn = document.querySelector('.header--cta');
const main = document.querySelector('.main');

btn.addEventListener('click', function() {
    main.scrollIntoView();
},false);

// MAIN SECTION

const mainButton = document.querySelector('.main--btn');

mainButton.addEventListener('click', convertToRoman, false);

function convertToRoman() {

    let decimalValue = document.querySelector('.main--decimal').value;
    const mainOutcome = document.querySelector('.main--outcome');

    const decimalValueArray = [ 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1 ];
    const romanNumeral = [ 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I' ];
   if (decimalValue < 3999 && decimalValue > 1) { 
        let returned = '';
        
        for (let i = 0; i < decimalValueArray.length; i++) {
            while (decimalValueArray[i] <= decimalValue) {
                returned += romanNumeral[i];
                decimalValue -= decimalValueArray[i];
            }
        }

        mainOutcome.textContent = returned;
        return returned; 

    } else {

        mainOutcome.textContent = 'You entered wrong thing';

    }
   }