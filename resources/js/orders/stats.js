import Chart from 'chart.js/auto';

(async function () {

    new Chart(
        document.getElementById('myChart'),
        {
            type: 'line',
            data: {
                labels: ordersDate.map(row => row.getMonth()),
                datasets: [
                    {
                        label: 'Acquisitions by year',
                        data: ordersTotal.map(row => row)
                    }
                ]
            }
        }
    );
})();
