import { HandleNavigation } from './js/navigation-handling.js';
const handleNavigation = new HandleNavigation();
import { SvgMap } from './js/svg-map.js';
import { RenderCalendar } from './js/render.js';

import { AboutMe } from './js/about-me.js';
const aboutMe = new AboutMe();

import { MenuResponsive } from './js/menu-responsive.js';
const menuResponsive = new MenuResponsive();


window.onload = () => {
    const request = new XMLHttpRequest();
    const script = document.querySelector('.script'); // Get script from DOM
    const src = script.src.replace('index.js', 'calendar.json');
    request.open('GET', src);
    request.responseType = 'json';
    request.send();

    request.onload = function() {
        const calendar = request.response.calendar;
        const mapa = request.response.mapa;

        const svgMap = new SvgMap(mapa);
        svgMap.changePowiat();

        const renderCalendar = new RenderCalendar(calendar);
        renderCalendar.renderDayOfMonth();
        renderCalendar.updateInitialInformations();
        renderCalendar.giveArrowsListeners();
        menuResponsive.giveEventListener();
    }

    aboutMe.giveListeners();
    handleNavigation.giveNavigationListeners();
    
}

