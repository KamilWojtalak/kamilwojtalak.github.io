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
        // image.setAttribute('src', this.screenshootRoot);
        image.src = this.screenshootRoot;

        image.setAttribute('alt', this.altText);
        const title = document.createElement('div');
        title.classList.add(data.block);
        title.textContent = this.titleText;
        const linkContainer = document.createElement('div');
        // IDK I apologize
        linkContainer.classList.add(data.block);
        const secondLink = document.createElement('a');
        secondLink.setAttribute('src', this.githubLink);
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
    "Screenshot_3.png",
    "ToDoApp",
    'Simple ToDoApp',
    "https://github.com/KamilWojtalak/kamilwojtalak.github.io/tree/master/Projects/ToDoApp"
);

window.onload = () => {
    ToDoApp.create();
}