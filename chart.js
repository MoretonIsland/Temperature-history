document.addEventListener('DOMContentLoaded', function () {
    /* Data pro prosinec */
    var decemberData = {
        '1948': -2.18,
        '1949': -1.71,
        '1950': -7.18,
        '1951': -4.42,
        '1952': -0.79,
        '1953': -1.55,
        '1954': -1.91,
        '1955': -5.18,
        '1956': -1.71,
        '1957': -1.00,
        '1958': -7.26,
        '1959': 0.35,
        '1960': -4.79,
        '1961': -4.67,
        '1962': -5.64,
        '1963': -10.08,
        '1964': -4.51,
        '1965': 0.65,
        '1966': -3.94,
        '1967': -1.52,
        '1968': -3.34,
        '1969': -3.40,
        '1970': -3.74,
        '1971': -1.00,
        '1972': -6.04,
        '1973': -3.28,
        '1974': -1.44,
        '1975': -1.61,
        '1976': -8.29,
        '1977': -4.93,
        '1978': -4.26,
        '1979': -0.36,
        '1980': -4.07,
        '1981': -4.34,
        '1982': 0.79,
        '1983': -9.56,
        '1984': -1.36,
        '1985': -8.71,
        '1986': -1.48,
        '1987': -0.19,
        '1988': -2.70,
        '1989': -8.25,
        '1990': -2.40,
        '1991': -1.36,
        '1992': -1.91,
        '1993': -1.07,
        '1994': 1.22,
        '1995': -3.46,
        '1996': -2.50,
        '1997': -0.87,
        '1998': 0.03,
        '1999': -1.52,
        '2000': -8.06,
        '2001': 0.59,
        '2002': -0.92,
        '2003': -0.40,
        '2004': -2.17,
        '2005': -4.69,
        '2006': 0.64,
        '2007': -2.74,
        '2008': -4.84,
        '2009': -2.63,
        '2010': -3.86,
        '2011': 0.95,
        '2012': 1.20,
        '2013': -5.53,
        '2014': -0.17,
        '2015': 3.02,
        '2016': -3.01,
        '2017': -3.30,
        '2018': 0.26,
        '2019': 0.94,
        '2020': 0.17,
        '2021': 2.37,
        '2022': -1.09,
        '2023': 4.67
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
        borderWidth: 1.5
        }]
    };

    // Vytvoření grafu pro prosinec
    var ctx = document.getElementById('myChart').getContext('2d');

    if (ctx) {
        var myChart = new Chart(ctx, {
            type: 'line',
            data: decemberChartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: false,
                        min: -12, // Minimum
                        max: 6,  // Maximum
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
        console.error("Canvas element with ID 'myChart' not found.");
    }
});
