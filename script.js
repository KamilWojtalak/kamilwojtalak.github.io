const myBestTechnology = document.querySelector('.best-container');
const frontEndTechnology = document.querySelector('.front-end-container');
const backEndTechnology = document.querySelector('.back-end-container');
const bootstrapTechnology = document.querySelector('.bootstrap-container');
const phpTechnology = document.querySelector('.php-container');
const sqlTechnology = document.querySelector('.sql-container');
const javaScriptTechnology = document.querySelector('.javascript-container');
const wordpressTechnology = document.querySelector('.wordpress-container');
const joomlaTechnology = document.querySelector('.joomla-container');
const cssTechnology = document.querySelector('.css-container');

function Project( technology, indexRoot, screenshootRoot, titleText, githubLink ) {
    this.technology = technology;
    this.indexRoot = indexRoot;
    this.screenshootRoot = screenshootRoot;
    this.altText = titleText;
    this.titleText = titleText;
    this.githubLink = technology;

    const data = {
        container: 'project-container',
        screenshot: 'screenshots',
        title: 'projects__title'
    };

    this.create = function() {
        const container = document.createElement('div');
        container.classList.add(data.container);
        technology.appendChild(container);
        const firstAnchor = document.createElement('a');
        firstAnchor.setAttribute('href', indexRoot);
        firstAnchor.setAttribute('target', "_blank");
        const image = new Image();
        image.classList.add(data.screenshot);
        image.src = this.screenshootRoot;
        image.alt = this.altText;
        const title = document.createElement('a');
        title.classList.add(data.title);
        title.setAttribute('href', this.githubLink);
        title.setAttribute('target', "_blank");
        title.textContent = this.titleText;

        container.appendChild(title);
        container.appendChild(firstAnchor);
        firstAnchor.appendChild(image);
    };
}

//  MyBest

const KillionMunyama = new Project(
    myBestTechnology,
    'https://munyama.pl/',
    'Screenshots/MyBest/killionMunyama.png',
    'Killion Munyama',
    'https://munyama.pl/',
)

//  FrontEnd

const Cuda = new Project(
    frontEndTechnology,
    'Projects/FrontEnd/Cuda Page/index.html',
    'Screenshots/FrontEnd/cuda.png',
    'Cuda Page',
    '',
)
const FreeCodeCampSurveyForm = new Project(
    frontEndTechnology,
    'Projects/FrontEnd/FreeCodeCamp Survey Form/index.html',
    'Screenshots/FrontEnd/freeCodeCampSurveyForm.png',
    'FreeCodeCamp Survey Form',
    '',
)
const Rio = new Project(
    frontEndTechnology,
    'Projects/FrontEnd/Rio Page/index.html',
    'Screenshots/FrontEnd/rio.png',
    'Rio Page',
    '',
)
const TheModernist = new Project(
    frontEndTechnology,
    'Projects/FrontEnd/The Modernist Page/index.html',
    'Screenshots/FrontEnd/theModernist.png',
    'The Modernist Page',
    '',
)

//  PHP

const FormValidationv3 = new Project(
    phpTechnology,
    '',
    'Screenshots/PHP/formValidationv3.png',
    'Form Validation v3',
    '',
)

//  JavaScript

const BottleOfWaterSimulator = new Project(
    javaScriptTechnology,
    'Projects/JavaScript/Bottle Of Water Simulator/index.html',
    'Screenshots/JavaScript/bottleOfWaterSimulator.png',
    'Bottle Of Water Simulator',
    '',
)
const BottleUsingClasses = new Project(
    javaScriptTechnology,
    'Projects/JavaScript/Simulator Using Classes/index.html',
    'Screenshots/JavaScript/bottleUsingClasses.png',
    'Simulator Using Classes',
    '',
)
const ToDoApp = new Project(
    javaScriptTechnology,
    'Projects/JavaScript/To Do App/index.html',
    'Screenshots/JavaScript/toDoApp.png',
    'To Do App',
    '',
)

//  CSS

const Cube3D = new Project(
    cssTechnology,
    'Projects/CSS/3D Cube/index.html',
    'Screenshots/CSS/3dCube.png',
    '3D Cube',
    ''
);

const threeImages = new Project(
    cssTechnology,
    'Projects/CSS/Three Images/index.html',
    'Screenshots/CSS/threeImages.png',
    'Three Images Hover Effect',
    ''
);





window.onload = () => {
    // My Best
    KillionMunyama.create();

    //Backend

    //  FrontEnd

    Cuda.create();
    FreeCodeCampSurveyForm.create();
    Rio.create();
    TheModernist.create();

    //  PHP

    FormValidationv3.create();
    
    // JavaScript

    ToDoApp.create();
    BottleOfWaterSimulator.create();
    BottleUsingClasses.create();

    //  CSS

    Cube3D.create();
    threeImages.create();
}



