// # Recupero tutti gli elementi html input da validare
const nameInput = document.getElementById('name');
// console.log(nameInput);
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmInput = document.getElementById('password-confirm');
const addressInput = document.getElementById('indirizzo-attività');
const pivaInput = document.getElementById('piva');

// # Recupero il bottone
const subBtn = document.getElementById('submit-btn');
const errorDisplay = document.getElementById('input-errors');
const errorCard = document.getElementById('error-card');

// Creo l'array di errori
let inputErrors = [];

// Funzione per verificare

subBtn.addEventListener("click", function (event) {
    //TODO: azzerare tutto
    inputErrors = [];
    errorCard.classList.add('d-none');
    errorDisplay.innerHTML = "";

    //! Validation per name
    let nameValue = nameInput.value;
    // console.log(nameValue);

    if (nameValue.length === 0 || nameValue.length < 3 || nameValue.length > 255) {
        event.preventDefault();
        // console.log('Lunghezza sbagliata');
        inputErrors.push('La lunghezza del nome deve essere tra i 3 ed i 255 caratteri');
    }

    //! Validazione per email
    let emailValue = emailInput.value;
    if (emailValue.length === 0 || emailValue.length < 3 || emailValue.length > 100) {
        event.preventDefault();
        inputErrors.push('La lunghezza della mail deve essere compresa tra i 3 e i 100 caratteri');
    }

    if (!emailValue.includes('@') || !emailValue.includes('.')) {
        event.preventDefault();
        inputErrors.push(`L'email deve contenere una @ e/o un .`);
    }

    //!Validation per password
    let passwordValue = passwordInput.value;
    if (passwordValue.length === 0 || passwordValue.length < 8 || passwordValue.length > 50) {
        event.preventDefault();
        inputErrors.push('La password deve essere compresa tra i 8 e i 50 caratteri');
    }

    let confirmValue = confirmInput.value;
    if (!(confirmValue === passwordValue)) {
        inputErrors.push('Le password non corrispondono. Assicurate di avere inserito la stessa password');
    }

    //! Validazione address
    let addressValue = addressInput.value;
    if (addressValue.length === 0 || addressValue.length < 3 || addressValue.length > 150) {
        inputErrors.push(`L'indirizzo deve essere compreso tra i 3 ed i 150 caratteri`);
    }

    //! Validazione piva
    let pivaValue = pivaInput.value;
    if (!(pivaValue.length === 11)) {
        inputErrors.push('La Partita Iva deve essere obbligatoriamente lunga 11 caratteri')
    }

    console.log(inputErrors);
    if (inputErrors.length) {
        errorCard.classList.remove('d-none');
    };

    inputErrors.forEach((error) => {
        errorDisplay.innerHTML += `<li>${error}</li>`;
    });
});
