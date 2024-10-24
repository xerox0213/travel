const fromSelectInput = document.querySelector(".flights-form__from-select");


fromSelectInput.addEventListener('change', handleChangeFromSelectInput)

function handleChangeFromSelectInput(e) {
    const fromAirport = fromSelectInput.value;
    getAirports(fromAirport).then(filterToSelectInput)
}

async function getAirports(fromAirport) {
    const res = await fetch(`/api/flights/from/${fromAirport}`);
    return await res.json();
}

function filterToSelectInput(airports) {
    const toSelectInput = document.querySelector(".flights-form__to-select");
    const options = toSelectInput.querySelectorAll('option');
    options.forEach((option) => {
        const index = airports.findIndex((airport) => airport['cAirport'] === option.value);
        const isInclude = index !== -1;
        if (isInclude) option.classList.remove('flights-form__option--hidden');
        else option.classList.add('flights-form__option--hidden');
    });
}
