document.addEventListener('DOMContentLoaded', function () {
    // Předpokládaná data pro červenec
    var julyData = {
        '1948': 22.48,
        '1949': 23.51,
        '1950': 20.32,
        '1951': 20.97,
        '1952': 23.36,
        '1953': 22.67,
        '1954': 21.52,
        '1955': 24.26,
        '1956': 19.77,
        '1957': 21.73,
        '1958': 20.78,
        '1959': 21.39,
        '1960': 19.67,
        '1961': 21.10,
        '1962': 19.29,
        '1963': 21.87,
        '1964': 22.32,
        '1965': 21.61,
        '1966': 23.19,
        '1967': 20.36,
        '1968': 21.35,
        '1969': 19.93,
        '1970': 22.74,
        '1971': 20.14,
        '1972': 20.82,
        '1973': 21.82,
        '1974': 22.21,
        '1975': 22.27,
        '1976': 22.74,
        '1977': 22.96,
        '1978': 20.25,
        '1979': 21.53,
        '1980': 21.67,
        '1981': 19.68,
        '1982': 21.84,
        '1983': 24.50,
        '1984': 22.32,
        '1985': 22.53,
        '1986': 22.46,
        '1987': 23.54,
        '1988': 24.27,
        '1989': 21.05,
        '1990': 19.97,
        '1991': 21.98,
        '1992': 17.39,
        '1993': 20.56,
        '1994': 21.21,
        '1995': 20.74,
        '1996': 20.45,
        '1997': 20.42,
        '1998': 22.46,
        '1999': 24.66,
        '2000': 19.96,
        '2001': 22.29,
        '2002': 24.26,
        '2003': 21.55,
        '2004': 20.36,
        '2005': 22.62,
        '2006': 23.55,
        '2007': 22.01,
        '2008': 21.94,
        '2009': 20.34,
        '2010': 24.23,
        '2011': 24.79,
        '2012': 25.69,
        '2013': 22.14,
        '2014': 20.14,
        '2015': 21.55,
        '2016': 23.52,
        '2017': 22.27,
        '2018': 23.45,
        '2019': 23.83,
        '2020': 24.71,
        '2021': 23.03,
        '2022': 23.44,
        '2023': 23.14,
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
        borderWidth: 1.5
        }]
    };

    // Vytvoření grafu pro červenec
    var ctx2 = document.getElementById('myChart2');

    if (ctx2) {
        var myChart2 = new Chart(ctx2, {
            type: 'line',
            data: julyChartData,
            options: {
                scales: {
                    y: {
                        
                        beginAtZero: false,
                        min: 16, // Minimum
                        max: 27,  // Maximum
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

         // Přidání reakce na změnu velikosti okna pro responzivitu
        window.addEventListener('resize', function () {
            myChart2.update(); // Aktualizace grafu při změně velikosti okna
        });   
    } else {
        console.error("Canvas element with ID 'myChart2' not found.");
    }
});
