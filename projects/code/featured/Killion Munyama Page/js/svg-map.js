const powiaty = document.querySelectorAll('.program__map');
const dlaPowiatu = document.querySelector('.section__header_program');

export function SvgMap(mapa) {
    this.changePowiat = () => {
        for (let i = 0; i < powiaty.length; i++) {
            powiaty[i].addEventListener('mouseover', e => {
                e.preventDefault();
                const takeTheClass = e.target.parentNode.classList[e.target.parentNode.classList.length - 1];
                for (let j = 0; j < mapa.length; j++) {
                    if (mapa[j].powiatClassifier === takeTheClass) {
                        dlaPowiatu.textContent = mapa[j].textContent;
                        
                    };
                }
            })
        }
    }
}
