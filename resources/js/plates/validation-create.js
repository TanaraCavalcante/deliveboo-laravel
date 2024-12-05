// # Recupero il bottone per il submit del form
const subBtn = document.getElementById('sub-btn');
// console.log(subBtn);

// # Recupero i valori degli input
// # Nome
const nameInput = document.getElementById('plate-title');
// console.log(nameInput);

// # Descrizione
const descriptionInput = document.getElementById('plate-description');
// console.log(descriptionInput);

// # Ingredienti
const ingredientsInput = document.getElementById('plate-ingredients');
// console.log(ingredientsInput);

// # Prezzo
const priceInput = document.getElementById('plate-price');
// console.log(priceInput);

// # Recupero la lista dove saranno inserito gli errori
const errorDisplay = document.getElementById('input-errors');
// console.log(errorDisplay);

// # Recuupero la card per eseguire il toggle della classe
const errorCard = document.getElementById('error-card');
// console.log(errorCard);

let inputErrors = [];

// TODO: Finire funzione di validazione
subBtn.addEventListener('click', function (e) {
    //Azzero tutto
    inputErrors = [];
    errorCard.classList.add('d-none');
    errorDisplay.innerHTML = "";

    // ! Validazione per nome
    let nameValue = nameInput.value;
    if (nameValue.length === 0 || nameValue.length < 3 || nameValue.length > 255) {
        e.preventDefault();
        // console.log('Il nome deve avere avere una lunghezza compresa tra 3 e 255 caratteri');
        // console.log(nameValue);
        inputErrors.push('Il nome deve avere avere una lunghezza compresa tra 3 e 255 caratteri');
    };

    // ! Validazione per descrizione
    let descriptionValue = descriptionInput.value;
    if (descriptionValue.length === 0 || descriptionValue.length < 10 || descriptionValue.length > 500) {
        e.preventDefault();
        // console.log('La descrizione deve avere una lunghezza compresa tra 10 e 500 caratteri');
        inputErrors.push('La descrizione deve avere una lunghezza compresa tra 10 e 500 caratteri');
    };

    // ! Validazione per ingredienti
    let ingredientsValue = ingredientsInput.value;
    if (ingredientsValue.length === 0 || ingredientsValue.length < 3 || ingredientsValue.length > 500) {
        e.preventDefault();
        // console.log('Gli ingredienti devono avere un lunghezza compresa tra 3 e 500 caratteri');
        inputErrors.push('Gli ingredienti devono avere un lunghezza compresa tra 3 e 500 caratteri');
    };

    // ! Validazione per prezzo
    let priceValue = priceInput.value;
    if (isNaN(priceValue) || priceValue.length === 0) {
        e.preventDefault();
        // console.log('Il prezzo DEVE essere un numero');
        inputErrors.push('Il prezzo DEVE essere un numero');
    };

    // console.log(inputErrors);
    if (inputErrors.length) {
        errorCard.classList.remove('d-none');
    };

    inputErrors.forEach((error) => {
        errorDisplay.innerHTML += `<li>${error}</li>`;
    });
});

