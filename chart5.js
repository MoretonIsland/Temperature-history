document.addEventListener('DOMContentLoaded', function () {
    // Předpokládaná data pro červenec
    var julyData = {
            '1948': 10.00,
            '1949': 13.00,
            '1950': 9.00,
            '1953': 12.00,
            '1955': 14.00,
            '1960': 8.00,
            '1963': 7.00,
            '1965': 5.00,
            '1970': 9.00,
            '1973': 11.00,
            '1975': 11.00,
            '1980': 11.00,
            '1983': 9.00,
            '1985': 13.00,
            '1990': 0.00,
            '1993': 0.00,
            '1995': 0.00,
            '2000': 11.00,
            '2003': 12.00,
            '2005': 12.00,
            '2010': 13.00,
            '2013': 12.00,
            '2015': 11.00,
            '2018': 14.00,
            '2019': 15.00,
            '2020': 17.00,
            '2021': 13.00,
            '2022': 15.00,
            '2023': 15.00,   
         };
    
    // Příprava dat pro graf července
    var julyYears = Object.keys(julyData);
    var julyTemperatures = Object.values(julyData);

    // Vytvoření datové sady pro Chart.js pro červenec
    var julyChartData = {
        labels: julyYears,
        datasets: [{
        label: 'July', // Přidán popisek pro měsíc
        data: julyTemperatures,
        borderColor: '#0047AB',
        backgroundColor: '#66B2FF',
        borderWidth: 2.0
        }]
    };

    // Vytvoření grafu pro červenec
    var ctx2 = document.getElementById('myChart5');

    if (ctx2) {
        var myChart5 = new Chart(ctx2, {
            type: 'line',
            data: julyChartData,
            options: {
                scales: {
                    y: {
                        
                        beginAtZero: false,
                        min: -2, // Nové minimum
                        max: 18,  // Nové maximum
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
                }
            }
        });
    } else {
        console.error("Canvas element with ID 'myChart5' not found.");
    }
});
