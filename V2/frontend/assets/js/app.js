const fetchAPI = async (url) => {
    try {
        const res = await fetch(url);
        const data = await res.json();
        
        render(data);
    } 
    catch (error) {
        console.log(error);
    }
};

const render = (data) => {
    document.querySelector('#datos').innerHTML = `
        - Dolar: ${data.dolar}
        - Euro: ${data.euro}
    `;
};

document.addEventListener('DOMContentLoaded', (e) => {
    const url    = 'http://localhost/cursos/API-API-REST/PHP/mh-api-rest-php-exchange/V2/backend/index.php';
    const action = 'conversion';
    const from   = 'dolar';
    const to     = 'euro';
    const amount = 1;

    console.log(url + '?action=' + action + '&from=' + from + '&to=' + to + '&amount=' + amount);

    fetchAPI(url + '?action=' + action + '&from=' + from + '&to=' + to + '&amount=' + amount);
});