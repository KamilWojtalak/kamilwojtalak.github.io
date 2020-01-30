let height = document.documentElement.clientHeight;
let main = document.querySelector('main');


let btn = document.querySelector('.header--cta');

btn.addEventListener('click', function() {
    main.scrollIntoView();
    
},false)

//              RENDER DOM ELEMENTS


function Element(indexRoot, screenshootRoot, altText, titleText, githubLink) {
    this.indexRoot = indexRoot;
    this.screenshootRoot = screenshootRoot;
    this.altText = altText;
    this.titleText = titleText;
    this.githubLink = githubLink;

    const data = {
        container: 'stuff',
        screenshot: 'images',
        block: 'stuff--blocks'
    };

    this.create = function() {
        const container = document.createElement('div');
        container.classList.add(data.container);
        main.appendChild(container);
        const firstAnchor = document.createElement('a');
        firstAnchor.setAttribute('href', indexRoot);
        const image = new Image();
        image.innerHTML = '<image />'
        image.classList.add(data.screenshot);
        image.src = this.screenshootRoot;
        image.alt = this.altText;
        const title = document.createElement('div');
        title.classList.add(data.block);
        title.textContent = this.titleText;
        const linkContainer = document.createElement('div');
        // IDK I apologize
        linkContainer.classList.add(data.block);
        const secondLink = document.createElement('a');
        secondLink.setAttribute('href', this.githubLink);
        secondLink.textContent = 'GitHub';

        container.appendChild(firstAnchor);
        firstAnchor.appendChild(image);
        container.appendChild(title);
        container.appendChild(linkContainer);
        linkContainer.appendChild(secondLink);
    };
}


const ToDoApp = new Element(
    "../Projects/ToDoApp/index.html",
    "screenshots/Screenshot_3.png",
    "ToDoApp",
    'Simple ToDoApp',
    "https://github.com/KamilWojtalak/kamilwojtalak.github.io/tree/master/Projects/ToDoApp"
);

const palindromeChecker = new Element(
    "Projects/Palindrome Checker/index.html",
    "screenshots/Screenshot_1.png",
    "Palindrome Checker Image",
    "Palindrome Checker",
    "https://github.com/KamilWojtalak/Algorithms-from-FCC/blob/master/Palindrome%20Checker.js"
)

const romanConverter = new Element(
    "Projects/Roman Converter/index.html",
    "screenshots/Screenshot_2.png",
    "Roman Converter Image",
    "Roman Converter",
    "https://github.com/KamilWojtalak/Algorithms-from-FCC/blob/master/Roman%20Converter.js"
)

const PsdToHTMLv1 = new Element(
    "Projects/PSD to Code v1/src/index.html",
    "screenshots/Screenshot_4.png",
    "Website Image",
    "PSD TO HTML V.1",
    "https://github.com/KamilWojtalak/I-learn/tree/master/PSD%20to%20Code%20v1"
)

const killionMunyama = new Element(
    'Projects/Killion Munyama/index.html',
    'screenshots/Screenshot_5.png',
    'Killion Munyama Website Screanshot',
    'Killion Munyama',
    "https://github.com/KamilWojtalak/I-learn/tree/master/killions's_website"
)

const feiferTrenuje = new Element(
    'https://feifertrenuje.pl/',
    'screenshots/Screenshot_6.png',
    'Feifer trenuje Website Screanshoot',
    'Feifer Trenuje - MentalRunner',
    'https://feifertrenuje.pl/'
)
const Exercise11 = new Element(
    'Projects/Exercise 1/index.html',
    'screenshots/Zadanie 1.png',
    'Exercise 1.1',
    'Exercise 1.1',
    'https://github.com/KamilWojtalak/I-learn/tree/master/weird/Exercise%201'
)

const Exercise1 = new Element(
    'Projects/Exercise 1/index.html',
    'screenshots/Exercise 1.png',
    'Exercise 1',
    'Exercise 1',
    'https://github.com/KamilWojtalak/I-learn/tree/master/sites/Exercise%201'
)
window.onload = () => {
    killionMunyama.create();
    feiferTrenuje.create();
    ToDoApp.create();
    PsdToHTMLv1.create();
    palindromeChecker.create();
    romanConverter.create();
    Exercise11.create();
    Exercise1.create();
}



