@extends('layouts.app')

@section('title', 'Active Employees Report')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center">
            <div class="d-sm-flex align-items-center">

                <div class="ps-sm-1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Employees
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Active Employees Report
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="ms-auto d-flex align-items-center">
                <div class="me-2 position-relative">
                    <input id="date" type="text" class="form-control date-format" />
                    <span class="calender-icon"><i class="bx bx-calendar fs-5"></i></span>
                </div>
                <button class="btn btn-inverse-primary me-2" id="apply">Apply</button>
                <a href="{{ url('/employeeAdd') }}" type="button" class="btn btn-primary px-md-4 ">Add
                    Employee</a>
            </div>

        </div>
        <!--end breadcrumb-->
        <hr class="mb-2 chipHr" />
        <!-- <div class="chip" id="selectedChip">John Doe <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">Jessica Doe <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">Michele Powa <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">Clark Natela <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">Anantu Painda <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">Tiger Xink <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">Salena Chain <span class="closebtn"
                                                              onclick="this.parentElement.style.display='none'">×</span>
                                                            </div> -->

        <div class="card w-100">
            <div class="card-body">
                <div class="row g-3 h-100">
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <a class="card radius-10 btn-inverse-info w-100" href="#">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary"> Active Employees</p>
                                        <h4 class="my-1" id="active_count"></h4>
                                    </div>
                                    <div class="text-primary ms-auto font-35">⠁⠑
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <div class="card radius-10 btn-inverse-yellow w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary"> Billable Employees</p>
                                        <h4 class="my-1" id="billable_count"></h4>
                                    </div>
                                    <div class="text-warning ms-auto font-35">⠁⠉
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <div class="card radius-10 btn-inverse-success  w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Buffer Employees</p>
                                        <h4 class="my-1" id="buffer_count"></h4>
                                    </div>
                                    <div class="text-success ms-auto font-35">⠃⠥⠑
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <div class="card radius-10 btn-inverse-purple w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Employees Under Notice</p>
                                        <h4 class="my-1" id="under_notice_count"></h4>
                                    </div>
                                    <div class="text-purple ms-auto font-35">⠥⠝
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <div class="card radius-10 btn-inverse-orange w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Trainees</p>
                                        <h4 class="my-1" id="trainee_count"></h4>
                                    </div>
                                    <div class="text-orange ms-auto font-35">⠞⠗
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <div class="card radius-10 btn-inverse-blue w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Employes on Probation</p>
                                        <h4 class="my-1" id="probation_count"></h4>
                                    </div>
                                    <div class="text-blue ms-auto font-35">⠑⠏
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <div class="card radius-10 btn-inverse-danger w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Revenue Earning</p>
                                        <h4 class="my-1">0</h4>
                                    </div>
                                    <div class="text-danger ms-auto font-35">⠗⠑
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3  d-flex">
                        <div class="card radius-10 btn-inverse-seagreen w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Non-Revenue Earning</p>
                                        <h4 class="my-1">0</h4>
                                    </div>
                                    <div class="text-seagreen ms-auto font-35">⠝⠗
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card w-100">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">Employees by Designation</p>
                        <div class="chart-container1 Horizontal">
                            <!-- <canvas id="EmByDesignation"></canvas> -->
                            <canvas id="EmployeeByDesignation"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card w-100">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">Employees by Span</p>
                        <div class="chart-container1 Horizontal">
                            <!-- <canvas id="EmByDesignation"></canvas> -->
                            <canvas id="EmployeeBySpan"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="sticky-table-head">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Active Employees</h5>
                                <div class="ms-auto d-flex align-items-center">
                                    <div class="position-relative">
                                        <input type="text" class="form-control ps-5 radius-30 search"
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
                            <hr class="mt-2" />
                        </div>
                        <div class="table-responsive">


                            <table class="table  table-striped  align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <!-- <th> <td>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="" checked="">
                                                </td>
                                                        </th> -->
                                        <th>Employee Name (SKID)</th>
                                        <th>Designation</th>
                                        <th>Span</th>
                                        <th>Manager</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="sticky-action">
                                            <div class="d-flex justify-content-center">Action</div>
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
                                <select name="" id="recordPerPage">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header gap-2">
                    <div class="position-relative popup-search w-100">
                        <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                            placeholder="Search">
                        <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
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
                    <a href="#" id="clearFilter">Clear Filter</a>
                </div>
                <hr class="mt-2 mb-4" />
                <div class="row g-3">

                    <div class="col-12">
                        <label for="input2" class="form-label">Span</label>
                        <select id="spanSelect" class="form-select lookup" data-placeholder="">
                            <option value=""></option>
                            {{-- <option value="Reactive">Reactive</option>
                            <option value="Solution">Solution</option>
                            <option value="Conglomeration">Conglomeration</option>
                            <option value="Algoritm">Algoritm</option>
                            <option value="Holistic">Holistic</option> --}}
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="input2" class="form-label">Client</label>
                        <select id="clientSelect" class="form-select lookup" data-placeholder="">
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
                        <select id="processSelect" class="form-select lookup" data-placeholder="">
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
                        <select id="designationSelect" class="form-select lookup" data-placeholder="">
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-12">
                        <a href="#" type="button" id="submitButton"
                            class="btn btn-primary px-md-4 w-100">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end switcher-->
@endsection
@section('scripts')
    <script>
        var dataForGraph;
        var selectedValue = {};


        $(document).ready(function() {
            gethelper();
            let page = 1;
            let limit = 10;
            let dateFormat = $('.date-format').val();
            getList(page, limit, selectedValue)


            $("#submitButton").click(function(event) {
                $(".date-format").val( dateFormat);
                event.preventDefault();
                let spanSelect = $("#spanSelect").val();
                let clientSelect = $("#clientSelect").val();
                let processSelect = $("#processSelect").val();
                let designationSelect = $("#designationSelect").val();

                if (spanSelect === "" && clientSelect === "" && processSelect === "" &&
                    designationSelect === "") {
                    return;
                }

                if (!selectedValue.spanSelect) {
                    selectedValue.spanSelect = [];
                }

                if (!selectedValue.clientSelect) {
                    selectedValue.clientSelect = [];
                }

                if (!selectedValue.processSelect) {
                    selectedValue.processSelect = [];
                }

                if (!selectedValue.designationSelect) {
                    selectedValue.designationSelect = [];
                }

                if (!selectedValue.spanSelect.includes(spanSelect)) {
                    selectedValue.spanSelect.push(spanSelect);
                }

                if (!selectedValue.clientSelect.includes(clientSelect)) {
                    selectedValue.clientSelect.push(clientSelect);
                }

                if (!selectedValue.processSelect.includes(processSelect)) {
                    selectedValue.processSelect.push(processSelect);
                }

                if (!selectedValue.designationSelect.includes(designationSelect)) {
                    selectedValue.designationSelect.push(designationSelect);
                }

                const newChip = $(
                    `<div class="chip">
                        <div class="spanVal" style="display: none;">${$("#spanSelect option:selected").val()}</div>
                        <span class="fw-medium">Span:</span>${$("#spanSelect option:selected").text()}
                        <span class="closebtn">×</span>
                    </div>`
                );

                const newChip2 = $(
                    `   <div class = "clientVal" style="display: none;"> 
                            ${$("#clientSelect option:selected").val()} 
                        </div> 
                        <div class='chip'>
                            ${'Client: ' +  $("#clientSelect option:selected").text()}
                            <span class='closebtn' onclick='$(this).parent().remove()'>
                            ×</span>
                        </div>`
                );

                const newChip3 = $(
                    `<div class = "processVal" style="display: none;"> ${$("#processSelect option:selected").val()} </div><div class='chip'>${'Process: ' +  $("#processSelect option:selected").text()}<span class='closebtn' onclick='$(this).parent().remove()'>×</span></div>`
                );

                const newChip4 = $(
                    `<div class="chip">
                        <div class="desginationVal" style="display: none;">
                            ${$("#designationSelect option:selected").val()}
                        </div>
                        ${'Designation: ' + $("#designationSelect option:selected").text()}
                        <span class="closebtn">×</span>
                    </div>`
                );

                if (spanSelect !== "") {
                    newChip.insertAfter($(".chipHr"));
                }
                if (clientSelect !== "") {
                    newChip2.insertAfter($(".chipHr"));
                }
                if (processSelect !== "") {
                    newChip3.insertAfter($(".chipHr"));
                }

                if (designationSelect !== "") {
                    newChip4.insertAfter($(".chipHr"));

                }
                // // $(".close-switcher").on("click", function() {
                // $(".switcher-wrapper").removeClass("switcher-toggled");
                // $(".switcher-btn").removeClass("d-none");
                // })

                
                getList(page, limit, selectedValue)

                $("#spanSelect").val("");
                $("#clientSelect").val("");
                $("#processSelect").val("");
                $("#designationSelect").val("");
                $("#select2-spanSelect-container").text("");
                $("#select2-clientSelect-container").text("");
                $("#select2-processSelect-container").text("");
                $("#select2-designationSelect-container").text("");
            });

            $(document).on("click", ".closebtn", function() {
                const chipElement = $(this).closest(".chip");

                // Determine which type of chip it is (span, client, process, or designation)
                let name;
                if (chipElement.find(".spanVal").length) {
                    selectedVal = "spanVal"
                    name = "spanSelect";
                } else if (chipElement.find(".clientVal").length) {
                    selectedVal = "clientVal"
                    name = "clientSelect";
                } else if (chipElement.find(".processVal").length) {
                    selectedVal = "processVal"
                    name = "processSelect";
                } else if (chipElement.find(".desginationVal").length) {
                    selectedVal = "desginationVal"
                    name = "designationSelect";
                }
                const idToRemove = chipElement.find("." + selectedVal).text();
                // Assuming selectedValue is an object accessible in this scope
                if (name in selectedValue && Array.isArray(selectedValue[name])) {
                    selectedValue[name] = selectedValue[name].filter(item => item.trim() !== idToRemove
                        .trim());
                }

                // Remove the chip element
                chipElement.remove();
                // Call your getList function here
                getList(page, limit, selectedValue);
            });

            $("#clearFilter").click(function(event) {
                event.preventDefault();
                $("#spanSelect").val("");
                $("#clientSelect").val('');
                $("#processSelect").val('');
                $("#designationSelect").val('');
                $("#select2-spanSelect-container").text("");
                $("#select2-clientSelect-container").text("");
                $("#select2-processSelect-container").text("");
                $("#select2-designationSelect-container").text("");
                $(".chip").remove();
                selectedValue = {};
                getList(page, limit, selectedValue)

            });
          
            $('#recordPerPage').on('change', function() {
                var limit = $(this).val();
                let page = 1;
                getList(page, limit, selectedValue)
            })

            $(document).on('click', '.filter-button', function(e) {
                e.preventDefault();
                let changeDateFormat = $('.date-format').val();
                getList(page, limit, selectedValue)

            })

            $(document).on('click', '.page-item', function() {
                if (!$(this).hasClass('disabled')) {
                    if ($(this).text().trim() === 'Previous') {
                        page = Number($('.page-item.active .page-link').text()) - 1;
                    } else if ($(this).text().trim() === 'Next') {
                        page = Number($('.page-item.active .page-link').text()) + 1;
                    } else {
                        page = $(this).find('.page-link').text();
                    }
                    getList(page, limit, selectedValue)
                }
            });

            $(".search").keyup(function(e) {
                let search = e.target.value;
                $.ajax({
                    type: "GET",
                    url: `/search/active/employee?page=${page}&limit=${limit}&search=${search}`,
                    success: function(response) {
                        data(response);
                        pagination(page, response);
                    }
                });
            });


            $(document).on('click', '#apply', function(){
               
                dataForLog($("#date").val());
            })

        });

        function gethelper() {
            $.ajax({
                type: "GET",
                url: "/helper",
                success: function(response) {
                    $.each(response?.spans, function(indexInArray, valueOfElement) {
                        $('#spanSelect').append(
                            `<option value="${valueOfElement.id}">${valueOfElement.name}</option>`);


                    });
                    $.each(response?.designations, function(indexInArray, valueOfElement) {
                        $('#designationSelect').append(
                            `<option value="${valueOfElement.id}">${valueOfElement.name}</option>`);
                    });
                }
            });
        }

        function getList(page, limit, selectedValue) {
            if (selectedValue) {
                spanSelectArr = selectedValue?.spanSelect;
                designationSelectArr = selectedValue?.designationSelect;
            }



            $.ajax({
                type: "GET",
                url: `/active/employee?page=${page}&limit=${limit}&spanId=${JSON.stringify(spanSelectArr)}&designationId=${JSON.stringify(designationSelectArr)}`,
                success: function(response) {
                    $("#active_count").html(response?.data?.allCount?.activeCount);
                    $("#billable_count").html(response?.data?.allCount?.billableCount);
                    $("#buffer_count").html(response?.data?.allCount?.bufferCount);
                    $("#probation_count").html(response?.data?.allCount?.probationCount);
                    $("#trainee_count").html(response?.data?.allCount?.traineeCount);
                    $("#under_notice_count").html(response?.data?.allCount?.underNoticeCount);
                    graphForDesignation(response);
                    graphForSpan(response);
                    data(response);
                    pagination(page, response);
                }
            });
        }

        function dataForLog(date) { 
            $.ajax({
                    type: "GET",
                    url: `/date/filter/active/employee?date=${date}`,
                    success: function (response) {
                        // dataForLog(JSON.parse(response.data.dateLog))
                        $("#active_count").html(response?.data?.activeCount);
                        $("#billable_count").html(response?.data?.billableCount);
                        $("#buffer_count").html(response?.data?.bufferCount);
                        $("#probation_count").html(response?.data?.probationCount);
                        $("#trainee_count").html(response?.data?.traineeCount);
                        $("#under_notice_count").html(response?.data?.underNoticeCount);
                        graphForDesignation(response);
                        graphForSpan(response);
                        data(response);
                        pagination(1, response);
                    }
                });
        }

        function data(response) {
            $('tbody').empty();
            if (response?.data?.list?.length < 1) {
                $('tbody').append(`<tr>
					<td class = "text-center" colspan = "7" >No Data Found</td>
					</tr>`);
            }
            for (let index = 0; index < response?.data?.list?.length; index++) {
                const element = response?.data?.list?.[index];

                const employeeImage = element.employeeImage ? decodeURIComponent(element.employeeImage) :
                    "assets/images/avatars/avatar-1.png";
                const name = element.name ? element.name : "";
                const skid = element.skid ? element.skid : "";
                const designationName = element.designationName ? element.designationName : "";
                const spanName = element.spanName ? element.spanName : "";
                const reportingName = element.reportingId ? element.reportingId : "";
                let reporting;
                if (reportingName) {

                    reporting = `${reportingName.name} (${reportingName.designationName})`;
                } else {
                    reporting = '';
                }


                const email = element.email ? element.email : "";
                const phone = element.phone ? element.phone : "";



                $('tbody').append(`
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <img src="${employeeImage}" class="rounded-circle" width="46" height="46" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14" style="text-transform: capitalize">${name}</h6>
                                    <p class="mb-0 font-13 text-secondary" style="text-transform: capitalize">${skid}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <h6 class="mb-1 font-14" style="text-transform: capitalize">${designationName}</h6>
                            </div>
                        </td>
                        <td style="text-transform: capitalize">${spanName}</td>
                        <td style="text-transform: capitalize">${reporting}</td>
                        <td>${email}</td>
                        <td style="text-transform: capitalize">${phone}</td>
                        <td>
                            <div class="table-action">
                                <a href="">
                                    <i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
                                </a>
                                <a href="./employeeAdd.html#test-vl-6" target="_blank">
                                    <i class="fadeIn animated bx bx-history fs-4 ms-2" title="History"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                `);
            }
        }

        function pagination(page, response) {
            let res = response?.data?.activeEmployeeDetails;
            let paginationHtml = ''

            if (res?.last_page != 1 ) {
                paginationHtml += `<li class="page-item ${Number(res?.current_page) == 1 ? 'disabled' : ''}">
													<a class="page-link" 
														tabindex="-1" aria-disabled="true">Previous</a>
												</li>`

                for (let index = 1; index <= res?.last_page; index++) {
                    paginationHtml +=
                        `<li class="page-item ${res?.current_page == index ? 'active' : ''}"><a class="page-link">${index}</a>`
                }
                paginationHtml += `<li class="page-item ${Number(res?.current_page) == Number(res?.last_page) ? 'disabled' : ''}"><a class="page-link">Next</a>
					</li>`
            }



            $(".pagination").html(paginationHtml)
        }

        function createChart(canvasId, chartType, labels, data, label, backgroundColor, borderColor) {
            var canvas = document.getElementById(canvasId);
            if (canvas && canvas.chart) {
                canvas.chart.destroy();
            }
            var ctx = canvas.getContext('2d');
            canvas.chart = new Chart(ctx, {
                type: chartType,
                data: {
                    labels: labels,
                    datasets: [{
                        label: label,
                        data: data,
                        backgroundColor: backgroundColor,
                        lineTension: 0,
                        borderColor: borderColor,
                        borderWidth: 1,
                    }, ],
                },
                options: {
                    maintainAspectRatio: false,
                    barPercentage: 0.5,
                    categoryPercentage: 0.7,
                    indexAxis: "y",
                    plugins: {
                        legend: {
                            position: "bottom",
                            display: true,
                        },
                    },
                    scales: {
                        x: {
                            max: Math.max(...data, 10),
                            beginAtZero: true, // Start x-axis at zero'
                        },
                        y: {
                            beginAtZero: true, // Start y-axis at zero
                        },
                    },
                },
            });
        }

        function graphForDesignation(response) {
            createChart(
                'EmployeeByDesignation',
                'bar',
                response?.data?.designationName,
                response?.data?.designationEmployeeCount,
                'Employees by Designation',
                ["#ff5b007d"],
                ["#ff5b00"]
            );
        }

        function graphForSpan(response) {
            createChart(
                'EmployeeBySpan',
                'bar',
                response?.data?.spanName,
                response?.data?.spanEmployeeCount,
                'Number of Employees by Span',
                ["#a600ff4f"],
                ["#a600ff"]
            );
        }

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
        $(".datepicker").flatpickr({
            dateFormat: "m-d-Y",
        });


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
            defaultDate: new Date(),
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
