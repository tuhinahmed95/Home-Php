const myChart = document.getElementById("myChart");
const myChart2 = document.getElementById("m");

const xValues = [
  "January",
  "February",
  "March",
  "April",
  " May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

new Chart(myChart, {
  type: "line",
  data: {
    labels: xValues,
    datasets: [
      {
        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
        borderColor: "red",
        fill: false,
      },
      {
        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
        borderColor: "green",
        fill: false,
      },
      {
        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
        borderColor: "blue",
        fill: false,
      },
    ],
  },
  options: {
    legend: { display: false },
  },
});

var xValue = ["Italy", "France", "Spain"];
var yValue = [55, 49, 44];
var barColor = ["#b91d47", "#00aba9", "#2b5797"];

new Chart(myChart2, {
  type: "pie",
  data: {
    labels: xValue,
    datasets: [
      {
        backgroundColor: barColor,
        data: yValue,
      },
    ],
  },
  options: {
    title: {
      display: true,
      text: "Top Selling Products",
    },
  },
});
