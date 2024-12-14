import Chart from 'chart.js/auto'

(async function () {
    const monthlyData = [
        { month: 'Gen', total: 10 },
        { month: 'Feb', total: 20 },
        { month: 'Mar', total: 15 },
        { month: 'Apr', total: 25 },
        { month: 'Mag', total: 22 },
        { month: 'Giu', total: 30 },
        { month: 'Lug', total: 28 },
        { month: 'Ago', total: 28 },
        { month: 'Set', total: 3 },
        { month: 'Ott', total: 28 },
        { month: 'Nov', total: 28 },
        { month: 'Dic', total: 28 },
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




