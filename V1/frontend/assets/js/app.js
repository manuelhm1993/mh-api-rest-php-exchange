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
    const url = 'http://localhost/cursos/API-API-REST/PHP/mh-api-rest-php-exchange/V1/backend/datos.php';

    fetchAPI(url);
});
