var options = {
  chart: {
    type: "donut",
    height: 300,
  },

  series: [44, 55, 13], // data

  labels: ["Produtcs", "Users", "Orders"],

  colors: ["#0d6efd", "darkviolet", "#27AE60"],

  dataLabels: {
    enabled: false,
  },

  legend: {
    position: "bottom",
  },

  plotOptions: {
    pie: {
      donut: {
        size: "65%", // besar lubang tengah
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();