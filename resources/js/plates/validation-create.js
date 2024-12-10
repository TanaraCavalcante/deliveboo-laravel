// # Recupero il bottone per il submit del form
const subBtn = document.getElementById('sub-btn');

// # Recupero i valori degli input
// # Nome
const nameInput = document.getElementById('plate-title');

// # Descrizione
const descriptionInput = document.getElementById('plate-description');

// # Ingredienti
const ingredientsInput = document.getElementById('plate-ingredients');

// # Prezzo
const priceInput = document.getElementById('plate-price');

// # Recupero la lista dove saranno inserito gli errori
const errorDisplay = document.getElementById('input-errors');

// # Recuupero la card per eseguire il toggle della classe
const errorCard = document.getElementById('error-card');

// # Recupero il valore dell'immagine
const imgInput = document.getElementById('plate-image');


let inputErrors = [];


subBtn.addEventListener('click', function (e) {
    //Azzero tutto


    // ! Validazione per nome
    let nameValue = nameInput.value;
    if (nameValue.length === 0 || nameValue.length < 3 || nameValue.length > 255) {
        e.preventDefault();
        inputErrors.push('Il nome deve avere avere una lunghezza compresa tra 3 e 255 caratteri');
    };

    // ! Validazione per descrizione
    let descriptionValue = descriptionInput.value;
    if (descriptionValue.length === 0 || descriptionValue.length < 10 || descriptionValue.length > 500) {
        e.preventDefault();
        inputErrors.push('La descrizione deve avere una lunghezza compresa tra 10 e 500 caratteri');
    };

    // ! Validazione per ingredienti
    let ingredientsValue = ingredientsInput.value;
    if (ingredientsValue.length === 0 || ingredientsValue.length < 3 || ingredientsValue.length > 500) {
        e.preventDefault();
        inputErrors.push('Gli ingredienti devono avere un lunghezza compresa tra 3 e 500 caratteri');
    };

    // ! Validazione per prezzo
    let priceValue = priceInput.value;
    if (isNaN(priceValue) || priceValue.length === 0) {
        e.preventDefault();
        inputErrors.push('Il prezzo DEVE essere un numero');
    };

    if (priceValue <= 0) {
        e.preventDefault();
        inputErrors.push('Il prezzo non può avere valori negativi o essere pari a zero')
    }

    // ! Validazione per immagine caricata
    let imgValue = imgInput.value;
    if (!(imgValue.length === 0)) {
        var re = /(\.jpg|\.jpeg|\.bmp|\.png)$/i;
        if (!re.exec(imgValue)) {
            e.preventDefault();
            inputErrors.push(`L'estensione del file non è supportata! Per favore inserisci un file che sia di uno di questi tipi:
                .jpg, .jpeg, .bmp, .png`);
        };

        let imgSize = imgInput.files[0].size;
        const imgKbSize = imgSize / 1024; //!Conversione di bytes per kb, cosi si uguala al back
        if (imgKbSize > 250) {
            e.preventDefault();
            inputErrors.push(`L'immagine è troppo grande per essere inserita! Non deve superare i 250Kb di grandezza`)
        }
    }

    if (inputErrors.length) {
        errorCard.classList.remove('d-none');
    };

    inputErrors.forEach((error) => {
        errorDisplay.innerHTML += `<li>${error}</li>`;
    });
});

