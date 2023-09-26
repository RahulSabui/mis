$(function () {
  "use strict";
  // chart 1
  var HiredEmp = {
    series: [
      {
        name: "Likes",
        data: [20, 28, 10, 9, 2, 19, 22, 9, 12, 17, 5, 5],
      },
    ],
    chart: {
      foreColor: "#9ba7b2",
      height: 180,
      type: "line",
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: true,
      },
      dropShadow: {
        enabled: true,
        top: 3,
        left: 14,
        blur: 4,
        opacity: 0.1,
      },
    },
    stroke: {
      width: 5,
      curve: "smooth",
    },
    xaxis: {
      type: "month",
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "may",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
    },
    title: {
      align: "left",
      style: {
        fontSize: "16px",
        color: "#666",
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        gradientToColors: ["#f41127"],
        shadeIntensity: 1,
        type: "horizontal",
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100, 100, 100],
      },
    },
    markers: {
      size: 4,
      colors: ["#f41127"],
      strokeColors: "#fff",
      strokeWidth: 2,
      hover: {
        size: 7,
      },
    },
    colors: ["#000"],
    yaxis: {
      // title: {
      //   text: "Engagement",
      // },
    },
  };

  var rateAttrition = {
    series: [
      {
        name: "Likes",
        data: [14, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5],
      },
    ],
    chart: {
      foreColor: "#9ba7b2",
      height: 180,
      type: "line",
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: true,
      },
      dropShadow: {
        enabled: true,
        top: 3,
        left: 14,
        blur: 4,
        opacity: 0.1,
      },
    },
    stroke: {
      width: 5,
      curve: "smooth",
    },
    xaxis: {
      type: "month",
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "may",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
    },
    title: {
      align: "left",
      style: {
        fontSize: "16px",
        color: "#666",
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        gradientToColors: ["#1130f4"],
        shadeIntensity: 1,
        type: "horizontal",
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100, 100, 100],
      },
    },
    markers: {
      size: 4,
      colors: ["#1130f4"],
      strokeColors: "#fff",
      strokeWidth: 2,
      hover: {
        size: 7,
      },
    },
    colors: ["#000"],
    yaxis: {
      // title: {
      //   text: "Engagement",
      // },
    },
  };

  var exEmployees = {
    series: [
      {
        name: "Likes",
        data: [14, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5],
      },
    ],
    chart: {
      foreColor: "#9ba7b2",
      height: 180,
      type: "line",
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: true,
      },
      dropShadow: {
        enabled: true,
        top: 3,
        left: 14,
        blur: 4,
        opacity: 0.1,
      },
    },
    stroke: {
      width: 5,
      curve: "smooth",
    },
    xaxis: {
      type: "month",
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "may",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
    },
    title: {
      align: "left",
      style: {
        fontSize: "16px",
        color: "#666",
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        gradientToColors: ["#21af0e"],
        shadeIntensity: 1,
        type: "horizontal",
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100, 100, 100],
      },
    },
    markers: {
      size: 4,
      colors: ["#21af0e"],
      strokeColors: "#fff",
      strokeWidth: 2,
      hover: {
        size: 7,
      },
    },
    colors: ["#000"],
    yaxis: {
      // title: {
      //   text: "Engagement",
      // },
    },
  };

  var chart = new ApexCharts(
    document.querySelector("#hiredEmployee"),
    HiredEmp
  );
  chart.render();

  var chart = new ApexCharts(
    document.querySelector("#rateOfAttrition"),

    rateAttrition
  );
  chart.render();

  var chart = new ApexCharts(
    document.querySelector("#exEmployees"),

    exEmployees
  );
  chart.render();
});
