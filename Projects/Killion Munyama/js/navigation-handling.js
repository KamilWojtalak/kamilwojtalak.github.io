const navLinks = document.querySelectorAll('.header__navigation__link');

export function HandleNavigation() {
    const ACTIVE_CLASS = 'active';

    this.giveNavigationListeners = () => {
        navLinks.forEach(target => {
        target.addEventListener('mouseover', e => {
            e.target.classList.toggle(ACTIVE_CLASS);
        })
        target.addEventListener('mouseout', e => {
            e.target.classList.toggle(ACTIVE_CLASS);
        })
        })
    }
}



