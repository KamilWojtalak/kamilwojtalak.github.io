const firstSectionItem = document.querySelectorAll('.first-part__item'); // to są te pomarańczowe teksty
const firstSectionList = document.querySelector('.first-part__list');   // lista pomarańczowych tekstów
const placeForDescription = document.querySelector('.section__place-for-description'); // miejsce przechowujące container dla tekstów i img
const img = document.createElement('img');
const container = document.querySelector('.description__container'); // miejsce na tekst
img.classList.add('second-part__image');
img.alt = 'Kyllion, Odśwież stronę, zdjęcie nie załadowało się prawidłowo';


export function AboutMe() {

    this.giveListeners = () => {
        for (let i = 0; i < firstSectionList.childElementCount; i++) {
            firstSectionItem[i].classList.add(i);
            firstSectionItem[i].addEventListener('click', () => {
            placeForDescription.innerHTML = '';
            switch (firstSectionItem[i].classList[1]) {
                case "0":
                    container.textContent = 'Samorządy są mi najbliższe z racji tego, że moja przygoda z polityką zaczęła się właśnie w samorządach. Aktywnie wspieram samorządowców oraz społeczność lokalną w działaniach na rzecz rozwoju wsi, miast i powiatów. Dzięki mojemu zaangażowaniu mogliśmy:';
                    const list = document.createElement('ul');
                    list.classList.add('siema');
                    const item1 = document.createElement('li');
                    const item2 = document.createElement('li');
                    const item3 = document.createElement('li');
                    item1.textContent = 'Zbudować wraz z samorządowcami Zespół Szkół Technicznych w Grodzisku WLKP';
                    item2.textContent = 'Pozyskać pieniądze na rozbudowę i wyposażenie Szpitala w Wolsztynie';
                    item3.textContent = 'Inicjować akcje społeczne i edukacyjne jak cykliczne wyjazdy młodzieży do sejmu połączone z nauką parlamentaryzmu czy zbieranie książek naukowych dla lokalnych bibliotek';
                    list.appendChild(item1);
                    list.appendChild(item2);
                    list.appendChild(item3);
                    placeForDescription.appendChild(container);
                    container.appendChild(list);
            break;
                case "1":
                    container.textContent = 'Jest to mój zawód. Nadal jestem nauczycielem akademickim, a o zasadach ekonomii mówię zawsze tam gdzie jestem zapraszany i mogę reprezentować Polskę i Was drodzy przyjaciele: DOHAFORUM KATAR, CHATHAM HOUSE, Forum Polska-RPA, Forum Gospodarczego Polska-Senegal i wiele innych. Polscy przedsiębiorcy mogli i mogą zawsze korzystać z mojej wiedzy i doświadczenia dotyczących wprowadzania produktów na rynki Afrykańskie. Jestem organizatorem dnia przedsiębiorczości z Killionem Munyamą Munyama Business Day gdzie wspólnie z przedsiębiorcami mówiliśmy o możliwościach finansowania projektów z pieniędzy Unii Europejskiej.';
                    placeForDescription.appendChild(container);
            break;
                case "2":
                    container.textContent = 'Ważnym aspektem mojej pracy poselskiej są relacje międzynarodowe, które buduję jako członek komisji zagranicznych i przedstawiciel Polskiego Sejmu do Rady Europy. Jako jedyny poseł z Polski przygotowałem dwie rezolucje na podstawie prowadzonych przez siebie badań na temat ochrony praw człowieka w Europie i na świecie. W Radzie Europu skupiałem się głównie na bezpieczeństwu migracyjnym Europy, a przede wszystkim Polski. ';
                    placeForDescription.appendChild(container);
            break;
                case "3":
                    container.textContent = 'KILLION MUNYAMA, urodził się w Zambii, rodzice byli rolnikami, oboje już nie żyją. Do Polski przyjechał w listopadzie 1981 roku, miesiąc przed wybuchem stanu wojennego, w ramach stypendium naukowego. Poznał język polski na tyle, że w roku 1987 skończył Handel Zagraniczny na Akademii Ekonomicznej w Poznaniu (obecnie Uniwersytet Ekonomiczny). Na tej samej uczelni w 1994 roku uzyskał stopień doktora nauk ekonomicznych, a w 2012 habilitował się w zakresie ekonomii. Specjalizuje się w zakresie bankowości i finansów międzynarodowych. Zawodowo jako pracownik naukowy jest związany z Katedrą Bankowości Uniwersytetu Ekonomicznego w Poznaniu, jest też wykładowcą oraz profesorem Wyższej Szkoły Gospodarki w Bydgoszczy. Tutaj, w Polsce odnalazł też to co w jego życiu jest najważniejsze. Kiedy to 30 lat temu poznał swoją żonę, Elżbietę, szybko zdecydował się na założenie rodziny. Państwo Munyama zostali w Polsce, zamieszkali nie daleko rodzinnej miejscowości Elżbiety (gm. Kamieniec, powiat grodziski) i tu wspólnie pracując wychowali troje, dzisiaj już dorosłych dzieci: córkę Pamelę oraz dwóch synów Jeffreya i Filipa. Rodzina w życiu Killiona jest wartością nadrzędną, to w niej odnajduje wsparcie, które powoduje, że jest człowiekiem ZAWSZE OTWARTYM.';
                    placeForDescription.appendChild(container);
            break;
        
        }
            }, false);
        }
    } 
}

