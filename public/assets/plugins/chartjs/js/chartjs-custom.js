$(function () {
  // chart1;
  // var ctx = document.getElementById("chart1").getContext("2d");
  // var myChart = new Chart(ctx, {
  //   type: "line",
  //   data: {
  //     labels: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
  //     datasets: [
  //       {
  //         label: "Google",
  //         data: [6, 20, 14, 12, 17, 8, 10],
  //         backgroundColor: ["#008cff"],
  //         lineTension: 0.4,
  //         borderColor: ["#008cff"],
  //         borderWidth: 3,
  //       },
  //       {
  //         label: "Facebook",
  //         data: [5, 30, 16, 23, 8, 14, 11],
  //         backgroundColor: ["#fd3550"],
  //         tension: 0.4,
  //         borderColor: ["#fd3550"],
  //         borderWidth: 3,
  //       },
  //     ],
  //   },
  //   options: {
  //     maintainAspectRatio: false,
  //     plugins: {
  //       legend: {
  //         position: "bottom",
  //         display: true,
  //       },
  //     },
  //     scales: {
  //       y: {
  //         beginAtZero: true,
  //       },
  //     },
  //   },
  // });

  //Number of employees broken by Gender
  var brokenByGender = document
    .getElementById("brokenByGender")
    .getContext("2d");
  var myChart = new Chart(brokenByGender, {
    type: "bar",
    data: {
      labels: ["Woman", "Man", "TW", "TM", "NB", "Agender", "GNL", "PNS"],
      datasets: [
        {
          label: "Number of Employees Broken by Gender",
          data: [30, 20, 12, 9, 10, 15, 10, 5],
          backgroundColor: ["#008cff5e"],
          lineTension: 0,
          borderColor: ["#0d6efd"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  //Number of employees broken by Religion
  var brokenByReligion = document
    .getElementById("brokenByReligion")
    .getContext("2d");
  var myChart = new Chart(brokenByReligion, {
    type: "bar",
    data: {
      labels: [
        "Hinduism",
        "Islam",
        "Christianity",
        "Sikhism",
        "Zoroastrianism",
        "Buddhism",
        "Jainism",
        "Judaism",
        "Bahaism",
      ],
      datasets: [
        {
          label: "Number of Employees Broken by Religion",
          data: [30, 25, 14, 12, 17, 8, 10, 8, 5],
          backgroundColor: ["#ff7f006e"],
          lineTension: 0,
          borderColor: ["#ff7f00"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  //Number of employees broken by blood Group
  var brokenByblood = document.getElementById("brokenByblood").getContext("2d");
  var myChart = new Chart(brokenByblood, {
    type: "bar",
    data: {
      labels: ["A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"],
      datasets: [
        {
          label: "Number of Employees Broken by Blood Group",
          data: [30, 25, 14, 12, 17, 8, 10, 14],
          backgroundColor: ["#82d9086b"],
          lineTension: 0,
          borderColor: ["#82d908"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  //Number of employees broken by qualification
  var brokenByQualification = document
    .getElementById("brokenByQualification")
    .getContext("2d");
  var myChart = new Chart(brokenByQualification, {
    type: "bar",
    data: {
      labels: [
        "M.Tech",
        "M.Tech",
        "M.Tech",
        "M.Tech",
        "M.Tech",
        "M.Tech",
        "M.Tech",
      ],
      datasets: [
        {
          label: "Number of Employees Broken by Qualification",
          data: [18, 30, 14, 12, 17, 8, 10],
          backgroundColor: ["#c900ff66"],
          lineTension: 0,
          borderColor: ["#c900ff"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  //Number of employees broken by academic stream
  var brokenByAcademic = document
    .getElementById("brokenByAcademic")
    .getContext("2d");
  var myChart = new Chart(brokenByAcademic, {
    type: "bar",
    data: {
      labels: [
        "stream",
        "stream",
        "stream",
        "stream",
        "stream",
        "stream",
        "stream",
      ],
      datasets: [
        {
          label: "Number of Employees Broken by Academic Stream",
          data: [18, 25, 14, 12, 30, 8, 10],
          backgroundColor: ["#ff00005e"],
          lineTension: 0,
          borderColor: ["#ff0000"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  //EX employees by span
  var exEmloyeeBySpan = document
    .getElementById("exEmloyeeBySpan")
    .getContext("2d");
  var myChart = new Chart(exEmloyeeBySpan, {
    type: "bar",
    data: {
      labels: [
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
      ],
      datasets: [
        {
          label: "Number of Employees Broken by Academic Stream",
          data: [18, 25, 14, 12, 17, 8, 10],
          backgroundColor: ["#ff00005e"],
          lineTension: 0,
          borderColor: ["#ff0000"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  // Employees By Designation
  let prity = document.getElementById("prity").getContext("2d");
  new Chart(prity, {
    type: "pie",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "#0d6efd",
            "#6f42c1",
            "#d63384",
            "#fd7e14",
            "#15ca20",
            "#0dcaf0",
          ],
          borderWidth: 1.5,
        },
      ],
    },
    options: {
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
    },
  });

  //EX employees by span
  var HiredEmployeesBrokenbySourceRequest = document
    .getElementById("HiredEmployeesBrokenbySourceRequest")
    .getContext("2d");
  var myChart = new Chart(HiredEmployeesBrokenbySourceRequest, {
    type: "bar",
    data: {
      labels: [
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
      ],
      datasets: [
        {
          label: "Number of Employees Broken by Academic Stream",
          data: [18, 25, 14, 12, 17, 8, 10],
          backgroundColor: ["#ff00005e"],
          lineTension: 0,
          borderColor: ["#ff0000"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  //EX employees by span
  var EmployeesNoticeSpan = document
    .getElementById("EmployeesNoticeSpan")
    .getContext("2d");
  var myChart = new Chart(EmployeesNoticeSpan, {
    type: "bar",
    data: {
      labels: [
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
        "Gender",
      ],
      datasets: [
        {
          label: "Number of Employees Broken by Academic Stream",
          data: [18, 25, 14, 12, 17, 8, 10],
          backgroundColor: ["#ff00005e"],
          lineTension: 0,
          borderColor: ["#ff0000"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  //Number of active clients by type of business
  var activeClientsByBusiness = document
    .getElementById("activeClientsByBusiness")
    .getContext("2d");
  var myChart = new Chart(activeClientsByBusiness, {
    type: "bar",
    data: {
      labels: ["Woman", "Man", "TW", "TM", "NB", "Agender", "GNL", "PNS"],
      datasets: [
        {
          label: "Number of Employees Broken by Gender",
          data: [30, 20, 12, 9, 10, 15, 10, 5],
          backgroundColor: ["#008cff5e"],
          lineTension: 0,
          borderColor: ["#0d6efd"],
          borderWidth: 1,
        },
        // {
        //   label: "Facebook",
        //   data: [12, 30, 16, 23, 8, 14, 11],
        //   backgroundColor: ["#15ca20"],
        //   tension: 0,
        //   borderColor: ["#15ca20"],
        //   borderWidth: 3,
        // },
      ],
    },
    options: {
      maintainAspectRatio: false,
      barPercentage: 0.6,
      categoryPercentage: 0.5,
      plugins: {
        legend: {
          position: "bottom",
          display: true,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});
