import Chart from 'chart.js/auto';

(async function () {
    const dates = [
        ordersDate.forEach(singleDate => {
            { year: singleDate }
        })];

    const totals = [
        ordersTotal.forEach(singleTotal => {
            { count: singleTotal }
        })];

    new Chart(
        document.getElementById('myChart'),
        {
            type: 'bar',
            data: {
                labels: dates.map(row => row.year),
                datasets: [
                    {
                        label: 'Acquisitions by year',
                        data: totals.map(row => row.count)
                    }
                ]
            }
        }
    );
})();
