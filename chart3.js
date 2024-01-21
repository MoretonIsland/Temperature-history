document.addEventListener('DOMContentLoaded', function () {
    // Předpokládaná data pro červenec
    var julyData = {
        '1948': 33.00,
        '1949': 35.00,
        '1950': 32.00,
        '1953': 34.00,
        '1955': 38.00,
        '1960': 32.00,
        '1963': 37.00,
        '1965': 33.00,
        '1970': 35.00,
        '1973': 33.00,
        '1975': 32.00,
        '1980': 37.00,
        '1983': 37.00,
        '1985': 36.00,
        '1990': 36.00,
        '1993': 32.00,
        '1995': 39.00,
        '2000': 30.00,
        '2003': 32.00,
        '2005': 36.00,
        '2010': 33.00,
        '2013': 35.00,
        '2015': 32.00,
        '2018': 33.00,
        '2019': 34.00,
        '2020': 35.00,
        '2021': 35.00,
        '2022': 33.00,
        '2023': 32.00,
    };
    
    // Příprava dat pro graf červenec
    var julyYears = Object.keys(julyData);
    var julyTemperatures = Object.values(julyData);

    // Vytvoření datové sady pro Chart.js pro červenec
    var julyChartData = {
        labels: julyYears,
        datasets: [{
        label: 'July', // Přidán popisek 
        data: julyTemperatures,
        borderColor: '#0047AB',
        backgroundColor: '#66B2FF',
        borderWidth: 2.0
        }]
    };

    // Vytvoření grafu pro červenec
    var ctx2 = document.getElementById('myChart3');

    if (ctx2) {
        var myChart3 = new Chart(ctx2, {
            type: 'line',
            data: julyChartData,
            options: {
                scales: {
                    y: {
                        
                        beginAtZero: false,
                        min: 29, // Minimum
                        max: 40,  // Maximum
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
                }
            }
        });
    } else {
        console.error("Canvas element with ID 'myChart3' not found.");
    }
});
