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
// # Recupero il valore dell'immagine
const imgInput = document.getElementById('plate-image');

//# Recupero gli elementi del dom dove saranno inseriti gli errori
const nameCard = document.getElementById('error-name');
let inputName = document.getElementById('input-name');
const descriptionCard = document.getElementById('error-description');
let inputDescription = document.getElementById('input-description');
const ingredientsCard = document.getElementById('error-ingredients');
let inputIngredients = document.getElementById('input-ingredients');
const priceCard = document.getElementById('error-price');
let inputPrice = document.getElementById('input-price');
const imageCard = document.getElementById('error-image');
let inputImage = document.getElementById('input-image');

subBtn.addEventListener('click', function (e) {
    //Azzero tutto
    nameCard.classList.add('d-none');
    inputName.innerHTML = '';
    descriptionCard.classList.add('d-none');
    inputDescription.innerHTML = '';
    ingredientsCard.classList.add('d-none');
    inputIngredients.innerHTML = '';
    priceCard.classList.add('d-none');
    inputPrice.innerHTML = '';
    imageCard.classList.add('d-none');
    inputImage.innerHTML = '';



    // ! Validazione per nome
    let nameValue = nameInput.value;
    if (nameValue.length === 0 || nameValue.length < 3 || nameValue.length > 255) {
        e.preventDefault();
        let nameError = 'La lunghezza del nome deve essere tra i 3 ed i 255 caratteri';
        nameCard.classList.remove('d-none');
        inputName.innerHTML += `<li>${nameError}</li>`;
    };

    // ! Validazione per descrizione
    let descriptionValue = descriptionInput.value;
    if (descriptionValue.length === 0 || descriptionValue.length < 10 || descriptionValue.length > 500) {
        e.preventDefault();
        let descriptionError = 'La lunghezza della descrizione deve essere tra i 3 ed i 500 caratteri';
        descriptionCard.classList.remove('d-none');
        inputDescription.innerHTML += `<li>${descriptionError}</li>`;
    };

    // ! Validazione per ingredienti
    let ingredientsValue = ingredientsInput.value;
    if (ingredientsValue.length === 0 || ingredientsValue.length < 3 || ingredientsValue.length > 500) {
        e.preventDefault();
        let ingredientsError = 'La lunghezza del testo deve essere tra i 3 ed i 500 caratteri';
        ingredientsCard.classList.remove('d-none');
        inputIngredients.innerHTML += `<li>${ingredientsError}</li>`;
    };

    // ! Validazione per prezzo
    let priceValue = priceInput.value;
    if (isNaN(priceValue) || priceValue.length === 0) {
        e.preventDefault();
        let priceError = 'Il prezzo inserito deve contenere almeno due decimali';
        priceCard.classList.remove('d-none');
        inputPrice.innerHTML += `<li>${priceError}</li>`;
    };

    if (priceValue <= 0) {
        e.preventDefault();
        let priceError = 'Il prezzo inserito deve essere un numero positivo';
        priceCard.classList.remove('d-none');
        inputPrice.innerHTML += `<li>${priceError}</li>`;
    }

    // ! Validazione per immagine caricata
    let imgValue = imgInput.value;
    if (!(imgValue.length === 0)) {
        var re = /(\.jpg|\.jpeg|\.bmp|\.png)$/i;
        if (!re.exec(imgValue)) {
            e.preventDefault();
            let imageError = `L'immagine inserita deve essere in uno dei seguenti formati:
            .jpg, .jpeg, .bmp, .png`;
            imageCard.classList.remove('d-none');
            inputImage.innerHTML += `<li>${imageError}</li>`;
        };

        let imgSize = imgInput.files[0].size;
        const imgKbSize = imgSize / 1024; //!Conversione di bytes per kb, cosi si uguala al back
        if (imgKbSize > 250) {
            e.preventDefault();
            let imageError = `L'immagine inserita non deve superare i 2.5MB di grandezza`;
            imageCard.classList.remove('d-none');
            inputImage.innerHTML += `<li>${imageError}</li>`;
        }
    }
});

