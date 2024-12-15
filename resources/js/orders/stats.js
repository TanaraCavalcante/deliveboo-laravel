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
            type: 'bar',
            data: {
                labels: x,
                datasets: [
                    {
                        label: 'Ordini per mese',
                        data: y
                    }
                ]
            }
        }
    );
})();




