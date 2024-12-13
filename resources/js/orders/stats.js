import Chart from 'chart.js/auto'

(async function () {
    const data = ;
    new Chart(
        document.getElementById('myChart'),
        {
            type: 'bar',
            data: {
                labels: data.map(row => row.year),
                datasets: [
                    {
                        label: 'Acquisitions by year',
                        data: data.map(row => row.count)
                    }
                ]
            }
        }
    );
})();
