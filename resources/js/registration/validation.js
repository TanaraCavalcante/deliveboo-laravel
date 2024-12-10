// # Recupero tutti gli elementi html input da validare
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmInput = document.getElementById('password-confirm');
const addressInput = document.getElementById('indirizzo-attività');
const pivaInput = document.getElementById('piva');

// # Recupero il bottone
const subBtn = document.getElementById('submit-btn');
const errorDisplay = document.getElementById('input-errors');
const errorCard = document.getElementById('error-card');

// Recupero le singole card
const nameCard = document.getElementById('error-name');
let inputName = document.getElementById('input-name');
const emailCard = document.getElementById('error-email');
let inputEmail = document.getElementById('input-email');
const passwordCard = document.getElementById('error-password');
let inputPaswword = document.getElementById('input-password');
const confirmCard = document.getElementById('error-confirm');
let inputConfirm = document.getElementById('input-confirm');
const addressCard = document.getElementById('error-address');
let inputAddress = document.getElementById('input-address');
const pivaCard = document.getElementById('error-piva');
let inputPiva = document.getElementById('input-piva');

// Funzione per verificare

subBtn.addEventListener("click", function (event) {
    nameCard.classList.add('d-none');
    inputName.innerHTML = '';
    emailCard.classList.add('d-none');
    inputEmail.innerHTML = '';
    passwordCard.classList.add('d-none');
    inputPaswword.innerHTML = '';
    confirmCard.classList.add('d-none');
    inputConfirm.innerHTML = '';
    addressCard.classList.add('d-none');
    inputAddress.innerHTML = '';
    pivaCard.classList.add('d-none');
    inputPiva.innerHTML = '';


    //! Validation per name
    let nameValue = nameInput.value;

    if (nameValue.length === 0 || nameValue.length < 3 || nameValue.length > 255) {
        event.preventDefault();
        let nameError = 'La lunghezza del nome deve essere tra i 3 ed i 255 caratteri';
        nameCard.classList.remove('d-none');
        inputName.innerHTML += `<li>${nameError}</li>`;
    }

    //! Validazione per email
    let emailValue = emailInput.value;
    if (emailValue.length === 0 || emailValue.length < 3 || emailValue.length > 100) {
        event.preventDefault();
        emailCard.classList.remove('d-none');
        let emailError = 'La lunghezza della mail deve essere tra i tre e i 100 caratteri';
        inputEmail.innerHTML += `<li>${emailError}</li>`
    }

    if (!emailValue.includes('@') || !emailValue.includes('.')) {
        event.preventDefault();
        emailCard.classList.remove('d-none');
        let emailError1 = 'La mail deve contenere almeno una @ ed un .';
        inputEmail.innerHTML += `<li>${emailError1}</li>`
    }

    //!Validation per password
    let passwordValue = passwordInput.value;
    if (passwordValue.length === 0 || passwordValue.length < 8 || passwordValue.length > 50) {
        event.preventDefault();
        passwordCard.classList.remove('d-none');
        let passwordError = 'La password deve avere una lunghezza compresa tra gli 8 e i 50 caratteri';
        inputPaswword.innerHTML += `<li>${passwordError}</li>`
    }

    let confirmValue = confirmInput.value;
    if (!(confirmValue === passwordValue)) {
        event.preventDefault();
        confirmCard.classList.remove('d-none');
        let confirmError = 'Le password inserite non corrispono';
        inputConfirm.innerHTML += `<li>${confirmError}</li>`
    }

    //! Validazione address
    let addressValue = addressInput.value;
    if (addressValue.length === 0 || addressValue.length < 3 || addressValue.length > 150) {
        event.preventDefault();
        addressCard.classList.remove('d-none');
        let addressError = `L'indirizzo deve avere una lunghezza compresa tra i 3 i 150 caratteri`;
        inputAddress.innerHTML += `<li>${addressError}</li>`
    }

    //! Validazione piva
    let pivaValue = pivaInput.value;
    if (!(pivaValue.length === 11)) {
        event.preventDefault();
        pivaCard.classList.remove('d-none');
        let pivaError = `L'indirizzo deve avere una lunghezza compresa tra i 3 i 150 caratteri`;
        inputPiva.innerHTML += `<li>${pivaError}</li>`
    }
});
