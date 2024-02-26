const url = 'https://ajayakv-rest-countries-v1.p.rapidapi.com/rest/v1/all';


const getCountryData = async () => {
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
            'X-RapidAPI-Host': 'ajayakv-rest-countries-v1.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        const result = await response.text();
        console.log(result);
    } catch (error) {
        console.error(error);
    }
}

getCountryData();
