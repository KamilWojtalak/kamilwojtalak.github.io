console.log('Siehehehema');

const main = document.querySelector('.sandpit__main');
const LINK = 'https://github.com/KamilWojtalak/kamilwojtalak.github.io/tree/master/sandpit/';

class CreateDOM {

    static createSection(name) {
        const section = document.createElement('section');
        const h2 = document.createElement('h2');
        const container = document.createElement('div');

        section.setAttribute('class', 'sandpit__container');
        h2.setAttribute('class', 'container__title');
        container.setAttribute('class', 'container__box');

        h2.textContent = name;

        main.appendChild(section);
        section.appendChild(h2);
        section.appendChild(container);
        
        return container;
    }

    static addProject(section, path, desc, serverSide) {
        const a = document.createElement('a');
        const p = document.createElement('p');

        a.setAttribute('class', 'container__item');
        if (serverSide) {
            a.setAttribute('href', LINK + path);
        } else {
            a.setAttribute('href', '/sandpit/' + path);
        }
        a.setAttribute('target', '_blank');
        p.setAttribute('class', 'item__p');

        p.textContent = desc;

        section.appendChild(a);
        a.appendChild(p);
    }
}

const php = CreateDOM.createSection('PHP');
CreateDOM.addProject(php, 'php/restapi', 'PHP REST API', true);
CreateDOM.addProject(php, 'php/con-crud', 'PHP CRUD', true);
CreateDOM.addProject(php, 'php/con-login-session', 'Login with sessions', true);
CreateDOM.addProject(php, 'php/con-oop-crud', 'PHP OOP CRUD', true);
CreateDOM.addProject(php, 'php/con-shop-cart', 'SHOP CART', true);
CreateDOM.addProject(php, 'php/con-shop-cart-session', 'SHOP CART with sessions', true);
CreateDOM.addProject(php, 'php/facebook-login', 'Facebook login API', true);
CreateDOM.addProject(php, 'php/form-validation', 'Form validation', true);
CreateDOM.addProject(php, 'php/php-ajax', 'PHP AJAX', true);
CreateDOM.addProject(php, 'php/php-login', 'PHP login', true);
CreateDOM.addProject(php, 'php/phppot-rest', 'PHP REST API', true);
CreateDOM.addProject(php, 'php/php-login-2', 'PHP Login 2', true);
CreateDOM.addProject(php, 'php/upload-file', 'PHP upload files', true);
const recaptcha = CreateDOM.createSection('reCAPTCHA');
CreateDOM.addProject(recaptcha, 'recaptcha/google-recaptchav2.1', 'PHP Google reCAPTCHAv2.1', true);
CreateDOM.addProject(recaptcha, 'recaptcha/google-recaptchav3', 'PHP Google reCAPTCHAv3', true);
const websites = CreateDOM.createSection('Websites');
CreateDOM.addProject(websites, 'frontend/projekt-testowy', 'Recrutation Project', false);
CreateDOM.addProject(websites, 'frontend/cuda-page', 'Cuda Page', false);
CreateDOM.addProject(websites, 'frontend/easybank', 'Easy Bank Website', false);
CreateDOM.addProject(websites, 'frontend/free-code-camp-survey-form', 'Survey Form', false);
CreateDOM.addProject(websites, 'frontend/huddle', 'Huddle Page', false);
CreateDOM.addProject(websites, 'frontend/insure', 'Insure Page', false);
CreateDOM.addProject(websites, 'frontend/social-media-dashboard', 'Social Media dashoboard', false);
CreateDOM.addProject(websites, 'frontend/the-modernist-page', 'The Modernist Page', false);
const bootstrap = CreateDOM.createSection('Bootstrap', false);
CreateDOM.addProject(bootstrap, 'bootstrap/sample-page', 'Bootstrap Sample Page', false);
const css = CreateDOM.createSection('CSS');
CreateDOM.addProject(css, 'css/svg-animation', 'SVG Animations', false);
CreateDOM.addProject(css, 'css/3d-cube', '3D CSS Cube', false);
CreateDOM.addProject(css, 'css/css-shapes', 'Shapes made up with CSS', false);
CreateDOM.addProject(css, 'css/dog-walkers-app', 'dog walkers app', false);
CreateDOM.addProject(css, 'css/fylo', 'Fylo CSS', false);
CreateDOM.addProject(css, 'css/single-card', 'Single card CSS', false);
CreateDOM.addProject(css, 'css/three-image', 'three images CSS', false);
CreateDOM.addProject(css, 'css/animate-css', 'Using animate.CSS', false);//
CreateDOM.addProject(css, 'css/css-animations', 'Playing with css animations', false);//
CreateDOM.addProject(css, 'css/css-fade-in', 'Using CSS Fade in', false);//
const js = CreateDOM.createSection('JavaScript');
CreateDOM.addProject(js, 'javascript/aos', 'Using AOS animations', false);//
CreateDOM.addProject(js, 'javascript/to-do-app', 'JavaScript To Do APP', false);
CreateDOM.addProject(js, 'javascript/api', 'JS API', false);
CreateDOM.addProject(js, 'javascript/balls', 'JS Canvas Balls', false);
CreateDOM.addProject(js, 'javascript/simulator-using-classes', 'JS Classes', false);