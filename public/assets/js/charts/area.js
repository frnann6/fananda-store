            var options = {
            chart: {
                type: 'area',
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

            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0.05
                }
            },

            stroke: {
                curve: 'smooth',
                width: 3
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