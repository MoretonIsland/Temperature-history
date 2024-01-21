document.addEventListener('DOMContentLoaded', function () {
    // Předpokládaná data pro prosinec
    
    var decemberData = {
        '1948': -14.00,
        '1949': -17.00,
        '1950': -24.00,
        '1953': -16.00,
        '1955': -19.00,
        '1960': -23.00,
        '1963': -24.00,
        '1965': -14.00,
        '1970': -19.00,
        '1973': -18.00,
        '1975': -17.00,
        '1980': -21.00,
        '1983': -28.00,
        '1985': -23.00,
        '1990': -22.00,
        '1993': -17.00,
        '1995': -21.00,
        '2000': -22.00,
        '2003': -13.00,
        '2005': -18.00,
        '2010': -14.00,
        '2013': -21.00,
        '2015': -9.00,
        '2018': -10.00,
        '2019': -14.00,
        '2020': -12.00,
        '2021': -12.00,
        '2022': -22.00,
        '2023': -8.00,
    };
    
    // Příprava dat pro graf prosince
    var decemberYears = Object.keys(decemberData);
    var decemberTemperatures = Object.values(decemberData);

    // Vytvoření datové sady pro Chart.js pro prosinec
    var decemberChartData = {
        labels: decemberYears,
        datasets: [{
            label: 'December', // Přidán popisek pro měsíc
            data: decemberTemperatures,
            borderColor: '#0047AB',
            backgroundColor: '#66B2FF',
            borderWidth: 2.0
        }]
    };

    // Vytvoření grafu pro prosinec
    var ctx = document.getElementById('myChart6').getContext('2d');

    if (ctx) {
        var myChart6 = new Chart(ctx, {
            type: 'line',
            data: decemberChartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: false,
                        min: -30, // Nové minimum
                        max: -6,  // Nové maximum
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
                            // Zabránit skrytí legendy po kliknutí
                            event.stopPropagation();
                        }
                    }
                },
                height: 200 // Přesunuto do bloku options
            }
        });
    } else {
        console.error("Canvas element with ID 'myChart6' not found.");
    }
});
