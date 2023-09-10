// Declaración de variables
const content = document.querySelector('#content');
const contentTemplate = document.querySelector('#content-template').content;
const fragment = new DocumentFragment();

// Hace la petición para consumir la API
const fetchAPI = async (url) => {
    try {
        const res  = await fetch(url);
        const data = await res.json();
        
        render(data);
    } 
    catch (error) {
        console.log(error);
    }
};

// Renderiza el contenido con la data
const render = (data) => {
    content.textContent = '';

    data.forEach(registro => {
        const clone = contentTemplate.cloneNode(true);
        const spans = clone.querySelectorAll('li span');

        // Devuelve un array con las claves para corresponderlas con los índices de los spans
        const keys = Object.keys(registro);

        spans.forEach((span, i) => {
            if(keys[i] === 'fecha') {
                // Formatear la fecha a timezone Venezuela y formato: dd/mm/yyyy
                const fecha = new Date(registro[keys[i]]);
                const options = {
                    year:  'numeric', // numeric - short - long
                    month: '2-digit', // numeric - 2-digit - short - long
                    day:   '2-digit', // numeric - 2-digit
                };

                // Con un solo bucle se corresponden los spans con los campos de la tabla
                span.textContent = fecha.toLocaleDateString('es-ve', options);
            }
            else {
                // Con un solo bucle se corresponden los spans con los campos de la tabla
                span.textContent = registro[keys[i]];
            }
        });

        fragment.appendChild(clone);
    });

    content.appendChild(fragment);
};

// Delegación de eventos
//
// Al hacer click
document.addEventListener('click', (e) => {
    const fuenteEvento = e.target;
    const url = 'http://localhost/cursos/API-API-REST/PHP/mh-api-rest-php-exchange/V1/backend/';

    if(fuenteEvento.id === 'euro' || fuenteEvento.id === 'dolar') {
        fetchAPI(url + fuenteEvento.id);
    }
});
