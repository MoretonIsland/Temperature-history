document.addEventListener('DOMContentLoaded', function () {
    // Předpokládaná data pro prosinec
    var decemberData = {
        '1948': 13.00,
        '1949': 16.00,
        '1950': 5.00,
        '1953': 11.00,
        '1955': 12.00,
        '1960': 16.00,
        '1963': 12.00,
        '1965': 13.00,
        '1970': 17.00,
        '1973': 13.00,
        '1975': 16.00,
        '1980': 12.00,
        '1983': 3.00,
        '1985': 6.00,
        '1990': 10.00,
        '1993': 11.00,
        '1995': 8.00,
        '2000': 2.00,
        '2003': 9.00,
        '2005': 6.00,
        '2010': 12.00,
        '2013': 12.00,
        '2015': 16.00,
        '2018': 11.00,
        '2019': 14.00,
        '2020': 14.00,
        '2021': 19.00,
        '2022': 16.00,
        '2023': 14.00,
    };
    
    // Příprava dat pro graf prosinec
    var decemberYears = Object.keys(decemberData);
    var decemberTemperatures = Object.values(decemberData);

    // Vytvoření datové sady pro Chart.js pro prosinec
    var decemberChartData = {
        labels: decemberYears,
        datasets: [{
        label: 'December', // Přidán popisek 
        data: decemberTemperatures,
        borderColor: '#0047AB',
        backgroundColor: '#66B2FF',
        borderWidth: 2.0
        }]
    };

    // Vytvoření grafu pro prosinec
    var ctx = document.getElementById('myChart4').getContext('2d');

    if (ctx) {
        var myChart = new Chart(ctx, {
            type: 'line',
            data: decemberChartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 0, // Minimum
                        max: 20,  // Maximum
                        title: {
                            display: true,
                            text: 'Temperature (°C)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Year'
                        }
                    }
                },
                plugins: {
                    legend: {
                        onClick: function (event, legendItem) {
                            // Zabránění skrytí legendy po kliknutí
                            event.stopPropagation();
                        }
                    }
                },
                height: 200 // Přesunuto do bloku options
            }
        });
    } else {
        console.error("Canvas element with ID 'myChart4' not found.");
    }
});
