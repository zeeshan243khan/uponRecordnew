const continentals = ['Asia', 'Europe', 'Africa', 'North America', 'South America'];
const saveBtn = document.getElementById('saveButton');
let europe_country_;
const inputEurope = document.querySelectorAll('input-europe');
const labelEurope = document.querySelectorAll('label_europe');
const imgEurope = document.querySelectorAll('img-europe');

const allContinental = {
    asia: { territory_names: [], flags_url: [] },
    europe: { territory_names: [], flags_url: [] },
    africa: { territory_names: [], flags_url: [] },
    north_america: { territory_names: [], flags_url: [] },
    south_america: { territory_names: [], flags_url: [] }
};


// ******* function that get data form api section start *******************

async function getCountriesByRegion(region) {
    const url = `https://restcountries.com/v3.1/region/${region}`;

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Error:", error.message);
        return null;
    }
}

// ******* function that get data form api section end *******************  
//******************* */ function for put data in html dom start ****************************

continentals.forEach((continental) => {

    return getCountriesByRegion(continental).then((countries) => {
        if (countries) {
            countries.map((countryList) => {
                const europeCountryContainer = document.getElementById("europe_country");
                const asiaCountryContainer = document.getElementById("asia_country");
                const africapeCountryContainer = document.getElementById("africa_country");
                const norhthAmericaCountryContainer = document.getElementById("north_america_country");
                const southAmericaCountryContainer = document.getElementById("sounth_america_country");
                // console.log(countryList.flags.png);
                switch (continental) {
                    case 'Asia':
                        return asiaCountryContainer.innerHTML += `
                        <div class="d-flex gap-2 mb-2">
                        <input  type="checkbox" id="${countryList.name.common}" name="${continental}" value="${countryList.name.common}">
                        <label for="vehicle1"> ${countryList.name.common}</label> 
                        <img class="flag" style="width: 17px; height: 14px !important" src="${countryList.flags.png}" alt="${continental}"> </div>

                       `
                    case 'Europe':
                        return europeCountryContainer.innerHTML += `

                        <div class="d-flex gap-2 mb-2">
                        <input  type="checkbox" id="${countryList.name.common}" name="${continental}" value="${countryList.name.common}">
                        <label for="vehicle1"> ${countryList.name.common}</label> 
                        <img  style="width: 17px; height: 14px !important" src="${countryList.flags.png}" alt="${continental}"> </div>
                       `
                    case 'Africa':
                        return africapeCountryContainer.innerHTML += `

                        <div class="d-flex gap-2 mb-2">
                        <input  type="checkbox" id="${countryList.name.common}" name="${continental}" value="${countryList.name.common}">
                        <label for="vehicle1"> ${countryList.name.common}</label> 
                        <img  style="width: 17px; height: 14px !important" src="${countryList.flags.png}" alt="${continental}"> </div>
                       `
                    case 'North America':
                        return norhthAmericaCountryContainer.innerHTML += `

                        <div class="d-flex gap-2 mb-2">
                        <input  type="checkbox" id="${countryList.name.common}" name="${continental}" value="${countryList.name.common}">
                        <label for="vehicle1"> ${countryList.name.common}</label> 
                        <img  style="width: 17px; height: 14px !important" src="${countryList.flags.png}" alt="${continental}"> </div>
                       `
                    case 'South America':
                        return southAmericaCountryContainer.innerHTML += `

                        <div class="d-flex gap-2 mb-2">
                        <input  type="checkbox" id="${countryList.name.common}" name="${continental}" value="${countryList.name.common}">
                        <label for="vehicle1"> ${countryList.name.common}</label> 
                        <img  style="width: 17px; height: 14px !important " src="${countryList.flags.png}" alt="${continental}"> </div>
                       `
                    default:
                        break;
                }
            })
        } else {
            console.log('Failed to fetch countries!');
        }
    }).catch((error) => {
        console.log("Error", error.message);
    })
})


//******************* */ function for put data in html dom end ****************************


// ******************** get all the data form checked territories start ***************

const getAllValuesOfTerritories = () => {
    let checkedBoxes = document.querySelectorAll('input[type="checkbox"]');

    checkedBoxes.forEach((checkedBox) => {
        if (checkedBox.checked === true) {
            let inputTagName = checkedBox.name;
            if (inputTagName === 'Asia') {
                const imgTag = checkedBox.nextElementSibling.nextElementSibling;
                const continentArray = allContinental.asia['territory_names'];
                const flagsArray = allContinental.asia['flags_url'];
                const checkedValue = checkedBox.value;
                const flagSrc = imgTag.src;

                // Check if the value is not already present in the array
                if (!continentArray.includes(checkedValue)) {
                    continentArray.push(checkedValue);
                }
                if (!flagsArray.includes(flagSrc)) {
                    flagsArray.push(flagSrc);
                }
            }
            if (inputTagName === 'Europe') {
                const imgTag = checkedBox.nextElementSibling.nextElementSibling;
                const continentArray = allContinental.europe['territory_names'];
                const flagsArray = allContinental.europe['flags_url'];

                const checkedValue = checkedBox.value;
                const flagSrc = imgTag.src;

                // Check if the value is not already present in the array
                if (!continentArray.includes(checkedValue)) {
                    continentArray.push(checkedValue);
                }
                if (!flagsArray.includes(flagSrc)) {
                    flagsArray.push(flagSrc);
                }

            }
            if (inputTagName === 'Africa') {
                const imgTag = checkedBox.nextElementSibling.nextElementSibling;
                const continentArray = allContinental.africa['territory_names'];
                const flagsArray = allContinental.africa['flags_url'];

                const checkedValue = checkedBox.value;
                const flagSrc = imgTag.src;

                // Check if the value is not already present in the array
                if (!continentArray.includes(checkedValue)) {
                    continentArray.push(checkedValue);
                }
                if (!flagsArray.includes(flagSrc)) {
                    flagsArray.push(flagSrc);
                }
            }
            if (inputTagName === 'North America') {
                const imgTag = checkedBox.nextElementSibling.nextElementSibling;
                const continentArray = allContinental.north_america['territory_names'];
                const flagsArray = allContinental.north_america['flags_url'];

                const checkedValue = checkedBox.value;
                const flagSrc = imgTag.src;

                // Check if the value is not already present in the array
                if (!continentArray.includes(checkedValue)) {
                    continentArray.push(checkedValue);
                }
                if (!flagsArray.includes(flagSrc)) {
                    flagsArray.push(flagSrc);
                }
            }
            if (inputTagName === 'South America') {
                const imgTag = checkedBox.nextElementSibling.nextElementSibling;
                const continentArray = allContinental.south_america['territory_names'];
                const flagsArray = allContinental.south_america['flags_url'];

                const checkedValue = checkedBox.value;
                const flagSrc = imgTag.src;
                // Check if the value is not already present in the array
                if (!continentArray.includes(checkedValue)) {
                    continentArray.push(checkedValue);
                }
                if (!flagsArray.includes(flagSrc)) {
                    flagsArray.push(flagSrc);
                }
            }
        }
    });
    console.log(allContinental);
}


// ******************** get all the data form checked territories end ***************

// ***********************Select unselect function section start *************************


const selectAllAsia = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'Asia' && checkBox.type === 'checkbox') {
            checkBox.checked = true;
        }
    });
}


const unselectAllAsia = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'Asia' && checkBox.type === 'checkbox') {
            checkBox.checked = false;
        }
    });
}

const selectAllEurope = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'Europe' && checkBox.type === 'checkbox') {
            checkBox.checked = true;
        }
    });
}

const unselectAllEurope = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'Europe' && checkBox.type === 'checkbox') {
            checkBox.checked = false;
        }
    });
}

const selectAllAfrica = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'Africa' && checkBox.type === 'checkbox') {
            checkBox.checked = true;
        }
    });
}

const unselectAllAfrica = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'Africa' && checkBox.type === 'checkbox') {
            checkBox.checked = false;
        }
    });
}

const selectAllNorthAmerica = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'North America' && checkBox.type === 'checkbox') {
            checkBox.checked = true;
        }
    });
}

const unselectAllNorthAmerica = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'North America' && checkBox.type === 'checkbox') {
            checkBox.checked = false;
        }
    });
}

const selectAllSouthAmerica = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'South America' && checkBox.type === 'checkbox') {
            checkBox.checked = true;
        }
    });
}

const unselectAllSouthAmerica = () => {
    let checkBoxes = document.querySelectorAll('input');
    checkBoxes.forEach((checkBox) => {
        if (checkBox.name === 'South America' && checkBox.type === 'checkbox') {
            checkBox.checked = false;
        }
    });
}

// ***********************Select unselect function section end *************************

// function for get all the values of selected check boxes

saveBtn.addEventListener('click', () => {
    getAllValuesOfTerritories();
    let outputAsia = document.getElementById('asia');
    let outputEurope = document.getElementById('europe');
    let outputAfrica = document.getElementById('africa');
    let outputNorthAmerica = document.getElementById('north_america');
    let outputSouthAmerica = document.getElementById('south_america');
    // console.log(allContinental.europe.territory_names);
    allContinental.asia.territory_names.map((territory, id) => {
        allContinental.asia.flags_url.map((url) => {
            outputAsia.innerHTML +=
                `
                <input type="hidden" value="${territory}" name="asia_country[]"> ,
                <input type="hidden" value="${url}" name="asia_country_url[]">
    `
        })
    })
    allContinental.europe.territory_names.map((territory) => {
        allContinental.europe.flags_url.map((url) => {
            outputEurope.innerHTML +=
                `
                <input type="hidden" value="${territory}" name="europe_country[]"> ,
                <input type="hidden" value="${url}" name="europe_country_url[]">
            `
        })

    })

    allContinental.africa.territory_names.map((territory) => {
        allContinental.africa.flags_url.map((url) => {
            outputAfrica.innerHTML +=
                `

                <input type="hidden" value="${territory}" name="africa_country[]"> ,
                <input type="hidden" value="${url}" name="africa_countr_url[]">

            `
        })

    })

    allContinental.north_america.territory_names.map((territory) => {
        allContinental.north_america.flags_url.map((url) => {
            outputNorthAmerica.innerHTML +=
                `

                <input type="hidden" value="${territory}" name="SouthAmerica_country[]" > ,
                <input type="hidden" value="${url}" name="SouthAmerica_country_url[]">

            `
        })

    })

    allContinental.south_america.territory_names.map((territory) => {
        allContinental.south_america.flags_url.map((url) => {
            outputSouthAmerica.innerHTML +=
                `

                <input type="hidden" value="${territory}" name="NorthAmerica_country[]" > ,
                <input type="hidden" value="${url}" name="NorthAmerica_country_url[]">

            `
        })

    })

});



