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

function toggleGraph(adder, remover, btnActive, btnDisabled) {
    remover.classList.remove('d-none');
    adder.classList.add('d-none');
    btnActive.classList.remove('btn-secondary');
    btnActive.classList.add('btn-primary');
    btnDisabled.classList.remove('btn-primary');
    btnDisabled.classList.add('btn-secondary');
}

yearsBtn.addEventListener('click', function () {
    toggleGraph(monthsDiv, yearsDiv, yearsBtn, monthsBtn)
})

monthsBtn.addEventListener('click', function () {
    toggleGraph(yearsDiv, monthsDiv, monthsBtn, yearsBtn)
});
