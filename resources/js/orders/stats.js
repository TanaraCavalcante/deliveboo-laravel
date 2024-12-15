import Chart from 'chart.js/auto'

(async function () {
    const monthlyData = [
        { month: 'Gen', value: 1 },
        { month: 'Feb', value: 2 },
        { month: 'Mar', value: 3 },
        { month: 'Apr', value: 4 },
        { month: 'Mag', value: 5 },
        { month: 'Giu', value: 6 },
        { month: 'Lug', value: 7 },
        { month: 'Ago', value: 8 },
        { month: 'Set', value: 9 },
        { month: 'Ott', value: 10 },
        { month: 'Nov', value: 11 },
        { month: 'Dic', value: 12 },
    ];

    let totalSum =[];
    const dates = rawDatas.map(row => row.month);
    totalSum.push(monthlyTotal)

    new Chart(
        document.getElementById('myChart'),
        {
            type: 'bar',
            data: {
                labels: dates,
                datasets: [
                    {
                        label: 'Acquisitions by month',
                        data: totalSum
                    }
                ]
            }
        }
    );
})();




