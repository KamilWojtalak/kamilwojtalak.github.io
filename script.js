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

    if (githubLink) {
        this.githubLink = indexRoot;
    } else {
        this.githubLink = githubLink;
    }

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
    'screenshots/my-best/killion-munyama.png',
    'Killion Munyama',
    'https://munyama.pl/',
)

//  FrontEnd

const Rekrutacyjny = new Project(
    frontEndTechnology,
    'projects/frontend/projekt-testowy/index.html',
    'screenshots/frontend/projekt-testowy.png',
    'Projekt Rekrutacyjny',
    'projects/frontend/projekt-testowy/index.html',
)
const insure = new Project(
    frontEndTechnology,
    'projects/frontend/insure/index.html',
    'screenshots/frontend/insure.png',
    'Insure Page',
    'projects/frontend/insure/index.html',
)
const easybank = new Project(
    frontEndTechnology,
    'projects/frontend/easybank/index.html',
    'screenshots/frontend/easybank.png',
    'Easybank Page',
    'projects/frontend/easybank/index.html',
)
const huddle = new Project(
    frontEndTechnology,
    'projects/frontend/huddle/index.html',
    'screenshots/frontend/huddle.png',
    'Huddle Page',
    'projects/frontend/huddle/index.html',
)
const socialMediaDashboard = new Project(
    frontEndTechnology,
    'projects/frontend/social-media-dashboard/index.html',
    'screenshots/frontend/social-media-dashboard.png',
    'Social Media Dashboard',
    'projects/frontend/social-media-dashboard/index.html',
)
const Cuda = new Project(
    frontEndTechnology,
    'projects/frontend/cuda-page/index.html',
    'screenshots/frontend/cuda.png',
    'Cuda Page',
    'projects/frontend/cuda-page/index.html',
)
const FreeCodeCampSurveyForm = new Project(
    frontEndTechnology,
    'projects/frontend/free-code-camp-survey-form/index.html',
    'screenshots/frontend/free-code-camp-survey-form.png',
    'FreeCodeCamp Survey Form',
    '',
)
const Rio = new Project(
    frontEndTechnology,
    'projects/frontend/rio-page/index.html',
    'screenshots/frontend/rio.png',
    'Rio Page',
    '',
)
const TheModernist = new Project(
    frontEndTechnology,
    'projects/frontend/the-modernist-page/index.html',
    'screenshots/frontend/the-modernist.png',
    'The Modernist Page',
    '',
)

//  PHP

const FormValidationv3 = new Project(
    phpTechnology,
    'https://github.com/KamilWojtalak/kamilwojtalak.github.io/tree/master/Projects/PHP/Form%20Validation%20v3',
    'screenshots/php/form-validation-v3.png',
    'Form Validation v3',
    'https://github.com/KamilWojtalak/kamilwojtalak.github.io/tree/master/Projects/PHP/Form%20Validation%20v3',
)

//  JavaScript

const BottleOfWaterSimulator = new Project(
    javaScriptTechnology,
    'projects/javascript/bottle-of-water-simulator/index.html',
    'screenshots/javascript/bottle-of-water-simulator.png',
    'Bottle Of Water Simulator',
    '',
)
const BottleUsingClasses = new Project(
    javaScriptTechnology,
    'projects/javascript/simulator-using-classes/index.html',
    'screenshots/javascript/bottle-using-classes.png',
    'Simulator Using Classes',
    '',
)
const ToDoApp = new Project(
    javaScriptTechnology,
    'projects/javascript/to-do-app/index.html',
    'screenshots/javascript/to-do-app.png',
    'To Do App',
    '',
)

//  CSS

const cssShapes = new Project(
    cssTechnology,
    'projects/css/css-shapes/index.html',
    'screenshots/css/css-shapes.png',
    'CSS Shapes',
    ''
);

const dogWalkersApp = new Project(
    cssTechnology,
    'projects/css/dog-walkers-app/index.html',
    'screenshots/css/dog-walkers-app.png',
    'Dog Walkers App',
    ''
);

const fylo = new Project(
    cssTechnology,
    'projects/css/fylo/index.html',
    'screenshots/css/fylo.png',
    'Fylo Card',
    ''
);

const singleCard = new Project(
    cssTechnology,
    'projects/css/single-card/index.html',
    'screenshots/css/single-card.png',
    'Single Card',
    ''
);

const Cube3D = new Project(
    cssTechnology,
    'projects/css/3d-cube/index.html',
    'screenshots/css/3d-cube.png',
    '3D Cube',
    ''
);

const threeImages = new Project(
    cssTechnology,
    'projects/css/three-images/index.html',
    'screenshots/css/three-images.png',
    'Three Images Hover Effect',
    ''
);





window.onload = () => {
    // My Best
    KillionMunyama.create();

    //Backend

    //  FrontEnd

    Rekrutacyjny.create();
    insure.create();
    huddle.create();
    socialMediaDashboard.create();
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

    cssShapes.create();
    dogWalkersApp.create();
    fylo.create();
    singleCard.create();
    Cube3D.create();
    threeImages.create();
}



