import Chart from 'chart.js/auto'

(async function () {

    if (!x || !y) {
        console.error("il grafico ha bisogno di x e y definite", x, y);
        return;
    }

    if (!Array.isArray(x) || !Array.isArray(y)) {
        console.error("x e y devono essere array", x, y);
        return;
    }

    if (x.length !== y.length) {
        console.error("x e y devono contenere lo stesso numero di elementi", x, y);
        return;
    }

    new Chart(
        document.getElementById('myChart'),
        {
            type: 'line',
            data: {
                labels: x,
                datasets: [
                    {
                        label: 'Totale vendite per mese',
                        data: y
                    }
                ]
            }
        }
    );
})();

// grafico annuale

(async function () {

    if (!x1 || !y1) {
        console.error("il grafico ha bisogno di x e y definite", x, y);
        return;
    }

    if (!Array.isArray(x1) || !Array.isArray(y1)) {
        console.error("x e y devono essere array", x1, y1);
        return;
    }

    if (x1.length !== y1.length) {
        console.error("x e y devono contenere lo stesso numero di elementi", x, y);
        return;
    }

    new Chart(
        document.getElementById('annualChart'),
        {
            type: 'line',
            data: {
                labels: x1,
                datasets: [
                    {
                        label: 'Totale vendite per anno',
                        data: y1
                    }
                ]
            }
        }
    );
})();

// recupero i div
const monthsDiv = document.getElementById('monthlyDiv');
const yearsDiv = document.getElementById('annualDiv');

// recupero i bottoni
const monthsBtn = document.getElementById('monthsBtn');
const yearsBtn = document.getElementById('yearsBtn');

// console.log(monthsBtn, yearsBtn);

yearsBtn.addEventListener('click', function () {
    yearsDiv.classList.remove('d-none');
    monthsDiv.classList.add('d-none');
    yearsBtn.classList.remove('btn-secondary');
    yearsBtn.classList.add('btn-primary');
    monthsBtn.classList.remove('btn-primary');
    monthsBtn.classList.add('btn-secondary')
})

monthsBtn.addEventListener('click', function () {
    yearsDiv.classList.add('d-none');
    monthsDiv.classList.remove('d-none');
    monthsBtn.classList.remove('btn-secondary');
    monthsBtn.classList.add('btn-primary');
    yearsBtn.classList.remove('btn-primary');
    yearsBtn.classList.add('btn-secondary');
})
