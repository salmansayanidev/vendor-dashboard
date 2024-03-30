

var options = {
  series: [
    {
      name: "New Customers",
      data: [31, 40, 28, 51, 42, 80, 99],
      fill: {
        colors: ["#000"], // Use 'colors' instead of 'color'
      },
    },
    {
      name: "Old Customers",
      data: [11, 32, 45, 32, 34, 52, 41],
      fill: {
        colors: ["#F5DBBA"], // Use 'colors' instead of 'color'
      },
    },
  ],
  chart: {
    height: 375,
    type: "area",
    zoom: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
  },
  legend: {
    position: "top",
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
  },
  xaxis: {
    type: "datetime",
    categories: [
      "2018-09-19T00:00:00.000Z",
      "2018-09-19T02:30:00.000Z",
      "2018-09-19T03:30:00.000Z",
      "2018-09-19T04:30:00.000Z",
      "2018-09-19T05:30:00.000Z",
      "2018-09-19T06:30:00.000Z",
    ],
  },
  tooltip: {
    x: {
      format: "dd/MM/yy HH:mm",
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

// pie chart
// am5.ready(function () {
//   // Create root element
//   // https://www.amcharts.com/docs/v5/getting-started/#Root_element
//   var root = am5.Root.new("chartdiv");

//   // Set themes
//   // https://www.amcharts.com/docs/v5/concepts/themes/
//   root.setThemes([am5themes_Animated.new(root)]);

//   // Create chart
//   // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
//   var chart = root.container.children.push(
//     am5percent.PieChart.new(root, {
//       layout: root.verticalLayout,
//       innerRadius: am5.percent(50),
//     })
//   );

//   // Create series
//   // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
//   var series = chart.series.push(
//     am5percent.PieSeries.new(root, {
//       valueField: "value",
//       categoryField: "category",
//       alignLabels: false,
//     })
//   );
  

//   series.labels.template.setAll({
//     textType: "circular",
//     centerX: 0,
//     centerY: 0,
//   });

//   // Set data
//   // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
//   series.data.setAll([
//     { value: 10, category: "One" },
//     { value: 9, category: "Two" },
//     { value: 6, category: "Three" },
//   ]);

  

//   // Create legend
//   // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
//   var legend = chart.children.push(
//     am5.Legend.new(root, {
//       centerX: am5.percent(50),
//       x: am5.percent(50),
//       marginTop: 15,
//       marginBottom: 15,
//     })
//   );

//   legend.data.setAll(series.dataItems);

//   // Play initial series animation
//   // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
//   series.appear(1000, 100);
// }); // end am5.ready()











am5.ready(function () {
  // Create root element
  var root = am5.Root.new("chartdiv");

  // Set themes
  root.setThemes([am5themes_Animated.new(root)]);

  // Create chart
  var chart = root.container.children.push(
    am5percent.PieChart.new(root, {
      layout: root.verticalLayout,
      innerRadius: am5.percent(50),
    })
  );

  // Create series
  var series = chart.series.push(
    am5percent.PieSeries.new(root, {
      valueField: "value",
      categoryField: "category",
      alignLabels: false,
    })
  );

  series.labels.template.setAll({
    textType: "circular",
    centerX: 0,
    centerY: 0,
    fontSize: 12, // Set font size
    fontWeight : 500,
  });

  // Set data
  series.data.setAll([
    { value: 10, category: "Single" },
    { value: 9, category: "Double" },
    { value: 6, category: "Apartments" },
  ]);
  

  // Hide legend
  // chart.children.remove(legend);

  // Play initial series animation
  series.appear(1000, 100);
}); 
