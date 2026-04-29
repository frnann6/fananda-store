        var options = {
            chart: {
                type: 'bar',
                height: 450,
                toolbar: {
                    show: false
                }
            },

            series: [{
                    name: 'Products',
                    data: totalProductsData
                },
                {
                    name: 'Users',
                    data: totalUsersData
                },
            ],

            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des']
            },

            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '45%',
                    borderRadius: 6 // bikin ujung rounded (modern 🔥)
                } 
            },

            colors: ['#0d6efd', 'darkviolet', '#27AE60'],

            dataLabels: {
                enabled: false
            },

            grid: {
                borderColor: '#eee'
            },

            legend: {
                position: 'top'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();