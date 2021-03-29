const menu = document.querySelector('.header__menu');
const navigation = document.querySelector('.header__navigation');

export function MenuResponsive() {

    this.giveEventListener = () => {
        menu.addEventListener('click', () => {
            navigation.classList.toggle('none');
        }, false)
    }
}