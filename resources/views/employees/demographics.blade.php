@extends('layouts.app')

@section('title', 'Demographics')
@section('content')
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-flex align-items-center">
                    <div class="d-sm-flex align-items-center">

                        <div class="ps-sm-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>

                                    <li class="breadcrumb-item" aria-current="page">Employees
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Demographics Report
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="ms-auto d-flex align-items-center">
                        <div class="me-2 position-relative">
                            <input type="text" class="form-control date-range" placeholder="From - To" />
                            <span class="calender-icon"><i class="bx bx-calendar fs-5"></i></span>
                        </div>
                        <a href="" class="btn btn-inverse-primary me-2 filter-button">Apply</a>
                        <a href="{{url('/employeeAdd')}}" type="button" class="btn btn-primary px-md-4 ">Add
                            Employee</a>
                    </div>

                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-3 text-secondary">Employees Broken by Gender</p>
                                <div class="chart-container1">
                                    <canvas id="brokenByGender"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-3 text-secondary">Employees Broken by Religion</p>
                                <div class="chart-container1">
                                    <canvas id="brokenByReligion"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-3 text-secondary">Employees Broken by Blood Group</p>
                                <div class="chart-container1">
                                    <canvas id="brokenByblood"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-3 text-secondary">Employees Broken by Qualification</p>
                                <div class="chart-container1">
                                    <canvas id="brokenByQualification"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-3 text-secondary">Employees Broken by Academic Stream</p>
                                <div class="chart-container1">
                                    <canvas id="brokenByAcademic"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Employee List</h5>
                                <div class="ms-auto d-flex align-items-center">
                                    <div class="position-relative">
                                        <input type="text" class="form-control ps-5 radius-30"
                                            placeholder="Search Employee">
                                        <span class="position-absolute top-50 product-show translate-middle-y">
                                            <i class="bx bx-search"></i>
                                        </span>
                                    </div>
                                    <a href="javascript:;" class="icon-wrapper" title="Filter"><i
                                            class="fadeIn bx bx-filter fs-3"></i></a>

                                    <!-- <a href="javascript:;" class="icon-wrapper" title="Delete"><i
                                    class='bx bxs-trash fs-5'></i></a> -->
                                    <a href="javascript:;" class="icon-wrapper" title="Download"><i
                                            class="bx bx-cloud-download fs-4"></i></a>

                                </div>
                            </div>

                            <hr class="mt-2 mb-4" />
                            <table class="table  table-striped  align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Employee Name (SKID)</th>
                                        <th>Designation</th>
                                        <th>Span</th>
                                        <th>Gender</th>
                                        <th>Religion</th>
                                        <th>Blood Group</th>
                                        <th>Qualification</th>
                                        <th>Academic Stream</th>
                                        <th>
                                            <div class="d-flex justify-content-center">
                                                Action
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="pagination-record">
                                <p class="mb-0 me-2">Records Per Page :</p>
                                <select name="" id="">
                                    <option value="5">10</option>
                                    <option value="10">25</option>
                                    <option value="20">50</option>
                                    <option value="20">100</option>
                                </select>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled"><a class="page-link" href="javascript:;"
                                            tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">1</a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link"
                                            href="javascript:;">2 <span class="visually-hidden">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:;">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
       
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

    

    <!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header gap-2">
                    <div class="position-relative popup-search w-100">
                        <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                            placeholder="Search">
                        <span
                            class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
                                class='bx bx-search'></i></span>
                    </div>
                    <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

            </div>
        </div>
    </div>
    <!-- end search modal -->

    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn">
            <!-- <i class='bx bx-cog bx-spin'></i> -->
            <i class="fadeIn animated bx bx-filter fs-2"></i>
        </div>
        <div class="switcher-body">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary">Filter</h5>
                    <a href="#">Clear Filter</a>
                </div>
                <hr class="mt-2 mb-4" />
                <div class="row g-3">
                    <div class="col-12">
                        <label for="input2" class="form-label">Span</label>
                        <select class="form-select lookup" data-placeholder="">
                            <option></option>
                            <option>Reactive</option>
                            <option>Solution</option>
                            <option>Conglomeration</option>
                            <option>Algoritm</option>
                            <option>Holistic</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="input2" class="form-label">Client</label>
                        <select class="form-select lookup" data-placeholder="">
                            <option></option>
                            <option>Reactive</option>
                            <option>Solution</option>
                            <option>Conglomeration</option>
                            <option>Algoritm</option>
                            <option>Holistic</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="input2" class="form-label">Process</label>
                        <select class="form-select lookup" data-placeholder="">
                            <option></option>
                            <option>Reactive</option>
                            <option>Solution</option>
                            <option>Conglomeration</option>
                            <option>Algoritm</option>
                            <option>Holistic</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="input2" class="form-label">Designation</label>
                        <select class="form-select lookup" data-placeholder="">
                            <option></option>
                            <option>Reactive</option>
                            <option>Solution</option>
                            <option>Conglomeration</option>
                            <option>Algoritm</option>
                            <option>Holistic</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="input2" class="form-label">Salary Slabs</label>
                        <input type="text" class="form-control" />
                    </div>

                    <div class="col-12">
                        <a href="#" type="button" class="btn btn-primary px-md-4 w-100">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->



    <script>

        let currentPage = 1; 
                    const itemsPerPage = 5; 
                    let allData = []; 
        
                    
                    function displayData() {
                        const startIndex = (currentPage - 1) * itemsPerPage;
                        const endIndex = startIndex + itemsPerPage;
                        const currentPageData = allData.slice(startIndex, endIndex);
        
                        $('tbody').empty();
        
                        currentPageData.forEach(element => {
                            
                            $('tbody').append(`<tr>
                                             
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src=${JSON.parse(element?.employeeImage) == "" ? "assets/images/avatars/avatar-1.png" : element?.employeeImage} class="rounded-circle"
                                                                width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14" style = "text-transform: capitalize">${element?.name == null ? "" : element?.name}</h6>
                                                            <p class="mb-0 font-13 text-secondary"  style = "text-transform: capitalize"> ${element?.skid == null ? "" : element?.skid}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-1 font-14" style = "text-transform: capitalize">${element?.designation_name == null ? "" : element?.designation_name}</h6>
                                                    </div>
                                                </td>
                                               
                                                <td style = "text-transform: capitalize">${element?.spamName == null ? "" : element?.spamName}</td>
                                                <td style = "text-transform: capitalize">${element?.gender == null ? "" : element?.gender}</td>
                                                <td style = "text-transform: capitalize">${element?.religion == null ? "" : element?.religion}</td>
                                                <td style = "text-transform: capitalize">${element?.bloodGroup == null ? "" : element?.bloodGroup}</td>
                                                <td style = "text-transform: capitalize"d>${element?.qualification == null ? "" : element?.qualification}</td>
                                                <td style = "text-transform: capitalize">${element?.academicStream == null ? "" : element?.academicStream}</td>
                                                <td>
                                            <div class="table-action">
                                                <a href="">
                                                    <i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
                                                </a>
                                                <a href="./employeeAdd.html#test-vl-6" target="_blank">
                                                    <i class="fadeIn animated bx bx-history fs-4 ms-2"
                                                        title="History"></i>
                                                </a>
                                            </div>
                                        </td>
                                            </tr>`);
                        });
        
                        updatePagination();
                    }
        
                    function updatePagination() {
                        
                        const totalPages = Math.ceil(allData.length / itemsPerPage);
        
                        
                        let pageLinks = '';
                        for (let i = 1; i <= totalPages; i++) {
        
                            const pageItemClass = (i === currentPage) ? 'active' : '';
                            const pageLink = `<li class="page-item ${pageItemClass}">
                    <a class="page-link" href="javascript:;" data-page="${i}">${i}</a>
                </li>`;
                            pageLinks += pageLink;
                        }
        
                        $('.pagination').html(`
                <li class="page-item" id="previousPage">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                ${pageLinks}
                <li class="page-item" id="nextPage">
                    <a class="page-link" href="#">Next</a>
                </li>
            `);
        
                        
                        $('.page-link[data-page]').click(function () {
                            currentPage = parseInt($(this).data('page'));
                            displayData();
                        });
        
                        if (currentPage <= 1) {
        
                            $('#previousPage').addClass('disabled');
                        } else {
                            
                            $('#previousPage').removeClass('disabled');
                        }
        
        
                        if (currentPage >= totalPages) {
                        
                            $('#nextPage').addClass('disabled');
                        } else {
                            
                            $('#nextPage').removeClass('disabled');
                        }
        
        
                        $('#previousPage').click((event) => {
                            if (currentPage > 1) {
                                currentPage--;
                                displayData();
                            }
                            event.preventDefault();
                        });
        
        
                        
                        $('#nextPage').click((event) => {
                            if (currentPage < totalPages) {
                                currentPage++;
                                displayData();
                            }
                            event.preventDefault();
                        });
                    }
        
        
                    function fetchDataFromServer() {
                        let token = sessionStorage.getItem('authToken');
                        let dataObject = {
                            limit: "100",
                            page: "1"
                        }
        
                        $.ajax({
                            type: 'GET',
                            url: "http://127.0.0.1:8000/demographic/employee",
                            headers: {
                                Authorization: token,
                            },
                            data: dataObject,
                            success: function (response) {
        
                                allData = response.data.employeeData;
                                //$('#exEmployeeCount').html(response?.data.length);
                                displayData();
                                graphForGender(response);
                                graphForReligion(response);
                                graphForBloodGroup(response);
                                graphForQualification(response);
                                graphForAcademicStream(response);
                                
                            },
                            error: function (error) {
                                console.error('Error fetching data:', error);
                            },
                        });
                    }
        
                    fetchDataFromServer();
        
        
                    function graphForGender(response){
                        var brokenByGender = document
            .getElementById("brokenByGender")
            .getContext("2d");
          var myChart = new Chart(brokenByGender, {
            type: "bar",
            data: {
              labels: response?.data?.genderName,
              datasets: [
                {
                  label: "Number of Employees Broken by Gender",
                  data: response?.data?.genderEmployeeCount,
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
                    }
        
                    function graphForReligion(response){
                        var brokenByReligion = document
            .getElementById("brokenByReligion")
            .getContext("2d");
          var myChart = new Chart(brokenByReligion, {
            type: "bar",
            data: {
              labels: response?.data?.religionName,
              datasets: [
                {
                  label: "Number of Employees Broken by Religion",
                  data: response?.data?.religionEmployeeCount,
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
                    }
        
        
                    function graphForBloodGroup(response){
                        var brokenByblood = document.getElementById("brokenByblood").getContext("2d");
          var myChart = new Chart(brokenByblood, {
            type: "bar",
            data: {
              labels: response?.data?.bloodGroupName,
              datasets: [
                {
                  label: "Number of Employees Broken by Blood Group",
                  data: response?.data?.bloodGroupEmployeeCount,
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
                    }
        
                    function graphForQualification(response){
                        var brokenByQualification = document
            .getElementById("brokenByQualification")
            .getContext("2d");
          var myChart = new Chart(brokenByQualification, {
            type: "bar",
            data: {
              labels: response?.data?.qualificationName,
              datasets: [
                {
                  label: "Number of Employees Broken by Qualification",
                  data: response?.data?.qualificationEmployeeCount,
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
        
                    }
        
                    function graphForAcademicStream(response) {
        
                        var brokenByAcademic = document
            .getElementById("brokenByAcademic")
            .getContext("2d");
          var myChart = new Chart(brokenByAcademic, {
            type: "bar",
            data: {
              labels: response?.data?.academicStreamName,
              datasets: [
                {
                  label: "Number of Employees Broken by Academic Stream",
                  data: response?.data?.academicStreamEmployeeCount,
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
                        
                    }
        
        
                $(document).ready(function () {
                    $('#example').DataTable();
        
                    var table = $('#example2').DataTable({
                        lengthChange: false,
                        buttons: ['copy', 'excel', 'pdf', 'print']
                    });
        
                    table.buttons().container()
                        .appendTo('#example2_wrapper .col-md-6:eq(0)');
                });
        
                //Open Search-List
                function toggleSearchList() {
                    var searchList = document.querySelector('.search-employee-list');
                    searchList.classList.toggle('open');
                }
                let wrapper = document.querySelector(".page-wrapper")
                wrapper.addEventListener("click", () => {
                    var searchList = document.querySelector('.search-employee-list');
                    searchList.classList.remove('open');
                });
        
        
        
            </script>
        
        
            <!-- date-Picker -->
            <script>
        
                $(".datepicker").flatpickr(
                    {
                        dateFormat: "m-d-Y",
                    }
                );
        
        
                $(".time-picker").flatpickr({
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: "Y-m-d H:i",
                });
        
                $(".date-time").flatpickr({
                    enableTime: true,
                    dateFormat: "Y-m-d H:i",
                });
        
                $(".date-format").flatpickr({
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                });
        
                $(".date-range").flatpickr({
                    mode: "range",
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                });
        
                $(".date-inline").flatpickr({
                    inline: true,
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                });
        
            </script>
@endsection