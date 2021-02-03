const featuredTechnology = document.querySelector('.featured-container');
const frontEndTechnology = document.querySelector('.front-end-container');
const phpTechnology = document.querySelector('.php-container');
const javaScriptTechnology = document.querySelector('.javascript-container');
const cssTechnology = document.querySelector('.css-container');
// const backEndTechnology = document.querySelector('.back-end-container');
// const joomlaTechnology = document.querySelector('.joomla-container');
// const wordpressTechnology = document.querySelector('.wordpress-container');
// const sqlTechnology = document.querySelector('.sql-container');
// const bootstrapTechnology = document.querySelector('.bootstrap-container');

function Project(technology, indexRoot, screenshotRoot, titleText, githubLink) {
    this.technology = technology;
    this.indexRoot = indexRoot;
    this.screenshotRoot = screenshotRoot;
    this.altText = titleText;
    this.titleText = titleText;
    if (!this.githubLink) {
        this.githubLink = "https://github.com/KamilWojtalak/kamilwojtalak.github.io/tree/master/" + githubLink;
    } else {
        this.githubLink = indexRoot;

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
        const indexRootAnchor = document.createElement('a');

        if (!this.indexRoot) {
            indexRootAnchor.setAttribute('href', this.indexRoot);
        } else {
            indexRootAnchor.setAttribute('href', this.githubLink);
        }

        indexRootAnchor.setAttribute('target', "_blank");
        const image = new Image();
        image.classList.add(data.screenshot);
        image.src = this.screenshotRoot;
        image.alt = this.altText;
        const title = document.createElement('a');
        title.classList.add(data.title);
        title.setAttribute('href', this.githubLink);
        title.setAttribute('target', "_blank");
        title.textContent = this.titleText;

        container.appendChild(title);
        container.appendChild(indexRootAnchor);
        indexRootAnchor.appendChild(image);
    };
}

//  featured
// function Project(technology, indexRoot, screenshotRoot, titleText, githubLink) {

const killionMunyama = new Project(
    featuredTechnology,
    'https://munyama.pl/',
    'screenshots/featured/killion-munyama.png',
    'Killion Munyama',
    ''
)
//  FrontEnd
// function Project(technology, indexRoot, screenshotRoot, titleText, githubLink) {

const rekrutacyjny = new Project(
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
const cuda = new Project(
    frontEndTechnology,
    'projects/frontend/cuda-page/index.html',
    'screenshots/frontend/cuda.png',
    'Cuda Page',
    'projects/frontend/cuda-page/index.html',
)
const freeCodeCampSurveyForm = new Project(
    frontEndTechnology,
    'projects/frontend/free-code-camp-survey-form/index.html',
    'screenshots/frontend/free-code-camp-survey-form.png',
    'FreeCodeCamp Survey Form',
    '',
)
const theModernist = new Project(
    frontEndTechnology,
    'projects/frontend/the-modernist-page/index.html',
    'screenshots/frontend/the-modernist.png',
    'The Modernist Page',
    'projects/frontend/the-modernist-page/index.html',
)

//  PHP
// function Project(technology, indexRoot, screenshotRoot, titleText, githubLink) {

const formValidation = new Project(
    phpTechnology,
    '',
    'screenshots/php/form-validation-v3.png',
    'Form Validation',
    'projects/php/form-validation',
)

const phpAjax = new Project(
    phpTechnology,
    '',
    'screenshots/php/default-php.png',
    'Ajax Form',
    'projects/php/form-ajax',
)

const phpLogin = new Project(
    phpTechnology,
    '',
    'screenshots/php/default-php.png',
    'Register/Login',
    'projects/php/form-login',
)

//  JavaScript
// function Project(technology, indexRoot, screenshotRoot, titleText, githubLink) {

const api = new Project(
    javaScriptTechnology,
    'projects/javascript/api/index.html',
    'screenshots/javascript/default-javascript.png',
    'Working with Third Party API',
    'projects/javascript/api/',
)
const balls = new Project(
    javaScriptTechnology,
    'projects/javascript/balls/index.html',
    'screenshots/javascript/balls.png',
    'MDN JavaScript Assesment #1',
    'projects/javascript/balls/',
)
const bottleOfWaterSimulator = new Project(
    javaScriptTechnology,
    'projects/javascript/bottle-of-water-simulator/index.html',
    'screenshots/javascript/default-javascript.png',
    'Bottle Of Water Simulator',
    'projects/javascript/bottle-of-water-simulator/',
)
const bottleUsingClasses = new Project(
    javaScriptTechnology,
    'projects/javascript/simulator-using-classes/index.html',
    'screenshots/javascript/default-javascript.png',
    'Simulator Using Classes',
    'projects/javascript/simulator-using-classes/',
)
const toDoApp = new Project(
    javaScriptTechnology,
    'projects/javascript/to-do-app/index.html',
    'screenshots/javascript/to-do-app.png',
    'To Do App',
    'projects/javascript/to-do-app/',
)

//  CSS
// function Project(technology, indexRoot, screenshotRoot, titleText, githubLink) {

const cssShapes = new Project(
    cssTechnology,
    'projects/css/css-shapes/index.html',
    'screenshots/css/css-shapes.png',
    'CSS Shapes',
    'projects/css/css-shapes/'
);

const dogWalkersApp = new Project(
    cssTechnology,
    'projects/css/dog-walkers-app/index.html',
    'screenshots/css/dog-walkers-app.png',
    'Dog Walkers App',
    'projects/css/dog-walkers-app/'
);

const fylo = new Project(
    cssTechnology,
    'projects/css/fylo/index.html',
    'screenshots/css/fylo.png',
    'Fylo Card',
    'projects/css/fylo/'
);

const singleCard = new Project(
    cssTechnology,
    'projects/css/single-card/index.html',
    'screenshots/css/single-card.png',
    'Single Card',
    'projects/css/single-card/'
);

const cube3D = new Project(
    cssTechnology,
    'projects/css/3d-cube/index.html',
    'screenshots/css/3d-cube.png',
    '3D Cube',
    'projects/css/3d-cube/'
);

const threeImages = new Project(
    cssTechnology,
    'projects/css/three-images/index.html',
    'screenshots/css/three-images.png',
    'Three Images Hover Effect',
    'projects/css/three-images/'
);





window.onload = () => {
    // Featured
    killionMunyama.create();

    // Backend

    //  FrontEnd

    rekrutacyjny.create();
    insure.create();
    huddle.create();
    socialMediaDashboard.create();
    cuda.create();
    freeCodeCampSurveyForm.create();
    theModernist.create();

    //  PHP

    phpLogin.create();
    phpAjax.create();
    formValidation.create();
    
    // JavaScript
    api.create();
    balls.create();
    toDoApp.create();
    bottleOfWaterSimulator.create();
    bottleUsingClasses.create();

    //  CSS

    cssShapes.create();
    dogWalkersApp.create();
    fylo.create();
    singleCard.create();
    cube3D.create();
    threeImages.create();
}



