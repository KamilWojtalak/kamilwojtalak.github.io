!function(e){var t={};function n(o){if(t[o])return t[o].exports;var a=t[o]={i:o,l:!1,exports:{}};return e[o].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)n.d(o,a,function(t){return e[t]}.bind(null,a));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){"use strict";n.r(t);const o=document.querySelectorAll(".header__navigation__link");const a=document.querySelectorAll(".program__map"),i=document.querySelector(".section__header_program");function r(e){this.changePowiat=()=>{for(let t=0;t<a.length;t++)a[t].addEventListener("mouseover",t=>{t.preventDefault();const n=t.target.parentNode.classList[t.target.parentNode.classList.length-1];for(let t=0;t<e.length;t++)e[t].powiatClassifier===n&&(i.textContent=e[t].textContent)})}}const s=document.querySelector(".day-of-month-numeric__list"),c=document.querySelector(".section__ym__date-span"),d=document.querySelector(".fa-caret-left"),l=document.querySelector(".fa-caret-right"),u=document.querySelector(".section_date__day-of-month"),m=document.querySelector(".section__date__month"),z=document.querySelector(".section_date__day-of-week"),y=document.querySelector(".section__list_red"),p=new Date,w=new Intl.DateTimeFormat("pl",{month:"long"}).format(p),k=new Intl.DateTimeFormat("pl",{weekday:"long"}).format(p);let h=2;function j(e){this.renderDayOfMonth=()=>{s.innerHTML="";for(let t=0;t<e[h].data.length;t++){const n=document.createElement("li");n.textContent=e[h].data[t].day,""!==e[h].data[t].content[0].text&&n.classList.add("highlight");for(let o=0;o<2;o++)n.classList.add(e[h].data[t].classes[o]);n.classList.add(t),s.appendChild(n),n.classList.contains("event-listener")&&n.addEventListener("click",(function(t){y.innerHTML="";const o=n.classList[n.classList.length-1];u.textContent=e[h].data[o].day,m.textContent=e[h].month,z.textContent=e[h].data[o].dayOfWeek;for(let t=0;t<e[h].data[o].content.length;t++)if(""!==e[h].data[o].content[t].text){const n=document.createElement("li");n.classList.add("section__item_red"),n.classList.add(e[h].data[o].content[t].powiat),n.textContent=e[h].data[o].content[t].text;const a=document.createElement("span");a.classList.add("section__span_red"),a.classList.add("text-blue"),a.textContent=e[h].data[o].content[t].hour,y.appendChild(a),y.appendChild(n)}}),!1)}},this.updateInitialInformations=()=>{z.textContent=k,c.textContent=w,m.textContent=e[h].month},this.giveArrowsListeners=()=>{d.addEventListener("click",()=>{1===h?h++:h--,c.textContent=e[h].month,this.renderDayOfMonth()},!1),l.addEventListener("click",()=>{2===h?h--:h++,c.textContent=e[h].month,this.renderDayOfMonth()})}}u.textContent=p.getDate();const g=document.querySelectorAll(".first-part__item"),f=document.querySelector(".first-part__list"),_=document.querySelector(".section__place-for-description"),L=document.createElement("img"),b=document.querySelector(".description__container");L.classList.add("second-part__image"),L.alt="Kyllion, Odśwież stronę, zdjęcie nie załadowało się prawidłowo";const v=document.querySelector(".header__menu"),C=document.querySelector(".header__navigation");const E=new function(){this.giveNavigationListeners=()=>{o.forEach(e=>{e.addEventListener("mouseover",e=>{e.target.classList.toggle("active")}),e.addEventListener("mouseout",e=>{e.target.classList.toggle("active")})})}},S=new function(){this.giveListeners=()=>{for(let e=0;e<f.childElementCount;e++)g[e].classList.add(e),g[e].addEventListener("click",()=>{switch(_.innerHTML="",g[e].classList[1]){case"0":b.textContent="Samorządy są mi najbliższe z racji tego, że moja przygoda z polityką zaczęła się właśnie w samorządach. Aktywnie wspieram samorządowców oraz społeczność lokalną w działaniach na rzecz rozwoju wsi, miast i powiatów. Dzięki mojemu zaangażowaniu mogliśmy:";const e=document.createElement("ul");e.classList.add("siema");const t=document.createElement("li"),n=document.createElement("li"),o=document.createElement("li");t.textContent="Zbudować wraz z samorządowcami Zespół Szkół Technicznych w Grodzisku WLKP",n.textContent="Pozyskać pieniądze na rozbudowę i wyposażenie Szpitala w Wolsztynie",o.textContent="Inicjować akcje społeczne i edukacyjne jak cykliczne wyjazdy młodzieży do sejmu połączone z nauką parlamentaryzmu czy zbieranie książek naukowych dla lokalnych bibliotek",e.appendChild(t),e.appendChild(n),e.appendChild(o),_.appendChild(b),b.appendChild(e);break;case"1":b.textContent="Jest to mój zawód. Nadal jestem nauczycielem akademickim, a o zasadach ekonomii mówię zawsze tam gdzie jestem zapraszany i mogę reprezentować Polskę i Was drodzy przyjaciele: DOHAFORUM KATAR, CHATHAM HOUSE, Forum Polska-RPA, Forum Gospodarczego Polska-Senegal i wiele innych. Polscy przedsiębiorcy mogli i mogą zawsze korzystać z mojej wiedzy i doświadczenia dotyczących wprowadzania produktów na rynki Afrykańskie. Jestem organizatorem dnia przedsiębiorczości z Killionem Munyamą Munyama Business Day gdzie wspólnie z przedsiębiorcami mówiliśmy o możliwościach finansowania projektów z pieniędzy Unii Europejskiej.",_.appendChild(b);break;case"2":b.textContent="Ważnym aspektem mojej pracy poselskiej są relacje międzynarodowe, które buduję jako członek komisji zagranicznych i przedstawiciel Polskiego Sejmu do Rady Europy. Jako jedyny poseł z Polski przygotowałem dwie rezolucje na podstawie prowadzonych przez siebie badań na temat ochrony praw człowieka w Europie i na świecie. W Radzie Europu skupiałem się głównie na bezpieczeństwu migracyjnym Europy, a przede wszystkim Polski. ",_.appendChild(b);break;case"3":b.textContent="KILLION MUNYAMA, urodził się w Zambii, rodzice byli rolnikami, oboje już nie żyją. Do Polski przyjechał w listopadzie 1981 roku, miesiąc przed wybuchem stanu wojennego, w ramach stypendium naukowego. Poznał język polski na tyle, że w roku 1987 skończył Handel Zagraniczny na Akademii Ekonomicznej w Poznaniu (obecnie Uniwersytet Ekonomiczny). Na tej samej uczelni w 1994 roku uzyskał stopień doktora nauk ekonomicznych, a w 2012 habilitował się w zakresie ekonomii. Specjalizuje się w zakresie bankowości i finansów międzynarodowych. Zawodowo jako pracownik naukowy jest związany z Katedrą Bankowości Uniwersytetu Ekonomicznego w Poznaniu, jest też wykładowcą oraz profesorem Wyższej Szkoły Gospodarki w Bydgoszczy. Tutaj, w Polsce odnalazł też to co w jego życiu jest najważniejsze. Kiedy to 30 lat temu poznał swoją żonę, Elżbietę, szybko zdecydował się na założenie rodziny. Państwo Munyama zostali w Polsce, zamieszkali nie daleko rodzinnej miejscowości Elżbiety (gm. Kamieniec, powiat grodziski) i tu wspólnie pracując wychowali troje, dzisiaj już dorosłych dzieci: córkę Pamelę oraz dwóch synów Jeffreya i Filipa. Rodzina w życiu Killiona jest wartością nadrzędną, to w niej odnajduje wsparcie, które powoduje, że jest człowiekiem ZAWSZE OTWARTYM.",_.appendChild(b)}},!1)}},x=new function(){this.giveEventListener=()=>{v.addEventListener("click",()=>{C.classList.toggle("none")},!1)}};window.onload=()=>{const e=new XMLHttpRequest,t=document.querySelector(".script").src.replace("index.js","calendar.json");e.open("GET",t),e.responseType="json",e.send(),e.onload=function(){const t=e.response.calendar;new r(e.response.mapa).changePowiat();const n=new j(t);n.renderDayOfMonth(),n.updateInitialInformations(),n.giveArrowsListeners(),x.giveEventListener()},S.giveListeners(),E.giveNavigationListeners()}}]);