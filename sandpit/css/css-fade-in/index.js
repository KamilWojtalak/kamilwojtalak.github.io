window.addEventListener('load', () => {
    fadeIn();
});

window.addEventListener('scroll', (e) => {
    fadeIn(200);
});

function fadeIn(offest) {
    const scrollY = window.scrollY;
    const endOfViewport = scrollY + window.innerHeight;
    const boxes = document.querySelectorAll('.box');
    console.log( 'ScrollY: ' + scrollY);
    console.log( 'End of viewport: ' + endOfViewport);
    for (let i = 0; i < boxes.length; i++) {
        const box = boxes[i];
        const boxTop = box.getBoundingClientRect().top
        const trigger = boxTop - window.innerHeight;
        if (trigger < 0) {
            box.classList.add('visible');
        } 
    }
}