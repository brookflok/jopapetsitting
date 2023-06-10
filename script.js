// Get the input elements
var obilazenjeInput = document.getElementById('obilazenje');
var setanjeInput = document.getElementById('setanje');
var cuvanjeInput = document.getElementById('cuvanje');
var nocenjeInput = document.getElementById('nocenje');
var brojLjubimacaInput = document.getElementById('broj_ljubimaca');

// Get the price spans
var obilazenjePriceSpan = document.getElementById('obilazenje_price');
var setanjePriceSpan = document.getElementById('setanje_price');
var cuvanjePriceSpan = document.getElementById('cuvanje_price');
var nocenjePriceSpan = document.getElementById('nocenje_price');

// Get Cijena price
var cijena_p = document.getElementById('cijena_p');
var error_p = document.getElementById('error_p');
var cijena = document.getElementById('cijena');

// Define the prices
var prices = {
    obilazenje: 10,
    setanje: 12,
    cuvanje: 15,
    nocenje: 5
};

function calculateAndLogCost() {

    // Get the number of uses for each service
    var obilazenjeCount = obilazenjeInput.value || 0;
    var setanjeCount = setanjeInput.value || 0;
    var cuvanjeCount = cuvanjeInput.value || 0;
    var nocenjeCount = nocenjeInput.value || 0;
    var brojljubimacaCount = brojLjubimacaInput.value || 1;

    if(brojljubimacaCount > 1){
        obilazenjePriceSpan.textContent = prices.obilazenje * brojljubimacaCount
        setanjePriceSpan.textContent = prices.setanje * brojljubimacaCount
        cuvanjePriceSpan.textContent = prices.cuvanje * brojljubimacaCount
        nocenjePriceSpan.textContent = prices.nocenje * brojljubimacaCount
    }else{
        obilazenjePriceSpan.textContent = prices.obilazenje 
        setanjePriceSpan.textContent = prices.setanje 
        cuvanjePriceSpan.textContent = prices.cuvanje 
        nocenjePriceSpan.textContent = prices.nocenje
    }

    // Make sure that the number of "Nocenje" uses is not greater than the number of "Cuvanje" uses
    if (nocenjeCount > cuvanjeCount) {
        cuvanjeInput.value = nocenjeCount;
        cuvanjeCount = nocenjeCount;
    } 

    // Calculate the total cost
    var totalCost = obilazenjeCount * prices.obilazenje +
                    setanjeCount * prices.setanje +
                    cuvanjeCount * prices.cuvanje +
                    nocenjeCount * prices.nocenje;

    totalCost = totalCost * brojljubimacaCount;

    // Log the total cost
    console.log('Total cost: ' + totalCost);
    cijena.textContent = totalCost;

}

function increment(inputId) {
    var inputField = document.getElementById(inputId);
    var currentValue = parseInt(inputField.value, 10);
    if (isNaN(currentValue)) {
        currentValue = 0;
    }
    inputField.value = currentValue + 1;
    calculateAndLogCost()
}

function decrement(inputId) {
    var inputField = document.getElementById(inputId);
    var currentValue = parseInt(inputField.value, 10);
    if (isNaN(currentValue)) {
        currentValue = inputId === 'broj_ljubimaca' ? 1 : 0;
    }
    if(currentValue <= (inputId === 'broj_ljubimaca' ? 1 : 0)) {
        calculateAndLogCost()
        return;
    }
    inputField.value = currentValue - 1;

    // If we are decreasing "cuvanje", decrease "nocenje" as well if they have the same value
      if(inputId === 'cuvanje' && document.getElementById('nocenje').value == currentValue) {
        document.getElementById('nocenje').value = currentValue - 1;
    }
    calculateAndLogCost()
}

// Attach the event listeners
obilazenjeInput.addEventListener('input', calculateAndLogCost);
setanjeInput.addEventListener('input', calculateAndLogCost);
cuvanjeInput.addEventListener('input', calculateAndLogCost);
nocenjeInput.addEventListener('input', calculateAndLogCost);
brojLjubimacaInput.addEventListener('input', calculateAndLogCost);
