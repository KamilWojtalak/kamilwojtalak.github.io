const numericDaysList = document.querySelector('.day-of-month-numeric__list'); // Lista
const monthDOM = document.querySelector('.section__ym__date-span'); // Miejsce gdzie ma się wyświetlać aktualny miesiąc                                                                          white
const leftArrow = document.querySelector('.fa-caret-left'); // Strzałeczki
const rightArrow= document.querySelector('.fa-caret-right'); // Strzałeczki

const dayChange = document.querySelector('.section_date__day-of-month'); // Nazwa dnia tygodnia czerwona
const monthChange = document.querySelector('.section__date__month'); // Nazwaa miesiąca czerwona
const dayOfTheWeekChange = document.querySelector('.section_date__day-of-week'); // Dzień tygodnia czerwona

const meetingsList = document.querySelector('.section__list_red');



const date = new Date();
const month = new Intl.DateTimeFormat('pl', {month: 'long'}).format(date);
const weekDay = new Intl.DateTimeFormat('pl', {weekday: "long"}).format(date);
let monthVary = 2;
dayChange.textContent = date.getDate();

export function RenderCalendar(calendar) {
    this.renderDayOfMonth = () => {
        numericDaysList.innerHTML = '';
            for(let i = 0; i < calendar[monthVary].data.length; i++) {
                    const item = document.createElement('li');     
                    item.textContent = calendar[monthVary].data[i].day;
                    if (calendar[monthVary].data[i].content[0].text !== '') {
                        item.classList.add('highlight');
                    }
                    for (let j = 0; j < 2; j++) {
                    item.classList.add(calendar[monthVary].data[i].classes[j]);
                    }
                    item.classList.add(i);
                    numericDaysList.appendChild(item);
                    if (item.classList.contains('event-listener')) {
                        item.addEventListener('click', function(e) {
                            meetingsList.innerHTML = '';
                            const itemLastClass = item.classList[item.classList.length - 1]
                            dayChange.textContent = calendar[monthVary].data[itemLastClass].day;
                            monthChange.textContent = calendar[monthVary].month;
                            dayOfTheWeekChange.textContent = calendar[monthVary].data[itemLastClass].dayOfWeek;
                            for (let k = 0; k < calendar[monthVary].data[itemLastClass].content.length; k++) {
                                if (!(calendar[monthVary].data[itemLastClass].content[k].text === '')) {
                                    const item = document.createElement('li');
                                    item.classList.add('section__item_red');
                                    item.classList.add(calendar[monthVary].data[itemLastClass].content[k].powiat);
                                    item.textContent = calendar[monthVary].data[itemLastClass].content[k].text;
                                    const span = document.createElement('span');
                                    span.classList.add('section__span_red');
                                    span.classList.add('text-blue');
                                    span.textContent = calendar[monthVary].data[itemLastClass].content[k].hour;
                                    meetingsList.appendChild(span);
                                    meetingsList.appendChild(item);
                                
                                }
                            }
        //                     <!-- <li class="section__item_red"><span class="section__span_red text-blue">16:00 </span>- Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, et!</li> -->
                        }, false);
                    }   
            
        }
        
    }
    
    this.updateInitialInformations = () => {
        dayOfTheWeekChange.textContent = weekDay;
        monthDOM.textContent = month;
        monthChange.textContent = calendar[monthVary].month;
    }

    this.giveArrowsListeners = () => {
        leftArrow.addEventListener('click', () => {
            if (monthVary === 1) {
                monthVary++;
            } else {
                monthVary--;
            }
            monthDOM.textContent = calendar[monthVary].month;
            this.renderDayOfMonth(); 
        },false)
        rightArrow.addEventListener('click', () => {
            if (monthVary === 2) {
                monthVary--;
            } else {
                monthVary++;
            }
            monthDOM.textContent = calendar[monthVary].month;
            this.renderDayOfMonth();
        })
    }
}