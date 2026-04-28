var options = {
  chart: {
    type: "line",
    height: 450,
    toolbar: {
      show: false,
    },
  },

  series: [
    {
      name: "Products",
      data: [12, 13, 20, 15, 16, 17],
    },
    {
      name: "Users",
      data: [25, 40, 23, 45, 30, 60],
    },
    {
      name: "Orders",
      data: [30, 45, 35, 50, 49, 60],
    },
  ],

  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
  },

//   fill: {
//     type: "gradient",
//     gradient: {
//       shadeIntensity: 1,
//       opacityFrom: 0.4,
//       opacityTo: 0.05,
//     },
//   },

  stroke: {
    curve: "smooth",
    width: 3,
  },

  colors: ["#0d6efd", "darkviolet", "#27AE60"],

  dataLabels: {
    enabled: false,
  },

  grid: {
    borderColor: "#eee",
  },

  legend: {
    position: "top",
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
