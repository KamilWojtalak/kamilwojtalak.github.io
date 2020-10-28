const container = document.querySelector('.container');

const url = 'https://ghibliapi.herokuapp.com/people';

let data;

fetch(url).then( response => {
    return response.json();
}).then( data => {
    console.log(data);

    data.forEach( el => {

        function DivFactory( name, content ) {
            const div = document.createElement('div');
            div.setAttribute( 'class', name )
            div.textContent = content;
            return div;
        }

        function LinkFactory( name, content ) {
            const div = document.createElement( 'div' );
            const link = document.createElement( 'a' );
            link.textContent = content;
            link.href = content;
            div.setAttribute( 'class', name )
            div.appendChild(link);
            return div;
        }

        const personBlock = new DivFactory( 'person' );
            const name = new DivFactory( 'person__name', el.name );
            const id = new DivFactory( 'person__id', el.id );
            const species = new LinkFactory( 'person__species', el.species );
            const films = new DivFactory( 'person__films', undefined );
            const url = new LinkFactory( 'person__url', el.url );
            const age = new DivFactory( 'person__age', el.age );
            const gender = new DivFactory( 'person__gender', el.gender );


            el.films.forEach( el => {
                const filmLink = document.createElement('a');
                filmLink.textContent = el;
                filmLink.href = el;
                films.appendChild(filmLink);
            })
            


        container.appendChild(personBlock);
        personBlock.appendChild(name)
        personBlock.appendChild(id)
        personBlock.appendChild(species)
        personBlock.appendChild(films)
        personBlock.appendChild(url)
        personBlock.appendChild(age)
        personBlock.appendChild(gender)
        
    });
})
.catch( e => {
    console.log(`Errorek: ${e}`)
});

