const input = document.querySelector('.framework');
const output = document.querySelector('.output');

input.addEventListener( 'input', ajaxFunction, false );

function ajaxFunction() {
    const value = input.value;

    const xhr = new XMLHttpRequest();

    xhr.addEventListener( 'error', function() {
        console.log('Coś poszło nie tak');
    });

    xhr.addEventListener( 'load', function() {
        const response = xhr.responseText;
        console.log('es działa');
        output.textContent = response;
    });
    xhr.responseType = 'text';

    xhr.open( 'GET', 'form.php?name=' + value, true);

    xhr.send();
}