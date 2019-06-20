let height = document.documentElement.clientHeight;
let main = document.querySelector('main');


let btn = document.querySelector('.header--cta');

btn.addEventListener('click', function() {
    main.scrollIntoView();
    
},false)