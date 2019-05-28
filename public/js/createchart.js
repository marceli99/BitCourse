const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            '6M',
            '3M',
            '2M',
            '1M',
            '3W',
            '2W',
            '1W',
            '6D',
            '5D',
            '4D',
            '3D',
            '2D',
            '1D',
            'Today'
        ],
        datasets: [
            {
                label: 'Bitcoin price',
                data: [
                    {{ chart.0 }},
            {{ chart.1 }},
{{ chart.2 }},
{{ chart.3 }},
{{ chart.4 }},
{{ chart.5 }},
{{ chart.6 }},
{{ chart.7 }},
{{ chart.8 }},
{{ chart.9 }},
{{ chart.10 }},
{{ chart.11 }},
{{ chart.12 }},
{{ chart.13 }},
],
backgroundColor: ['rgba(111, 111, 111, 0.2)'],
    borderColor: [
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)',
    'rgba(247,147,26, 1)'
],
    borderWidth: 1
}
]
},
options: {
    scales: {
        yAxes: [
            {
                ticks: {
                    beginAtZero: true
                }
            }
        ]
    }
}
});