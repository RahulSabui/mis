@extends('layouts.app')
@section('title', 'Demographics')
@section('content')
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-sm-flex align-items-center">

                    <div class="ps-sm-1">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="./index"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a href="./clientList">Client
                                        List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Client</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->


                <!--start stepper-->
                <div class="card">
                    <div class="card-body">
                        <div id="stepper3" class="bs-stepper gap-4 vertical">
                            <div class="bs-stepper-header" role="tablist">
                                <div class="step" data-target="#test-vl-1">
                                    <div class="step-trigger" role="tab" id="stepper3trigger1"
                                        aria-controls="test-vl-1">
                                        <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Basic Information</h5>
                                            <p class="mb-0 steper-sub-title">Client's Demographics</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="step" data-target="#test-vl-2">
                                    <div class="step-trigger" role="tab" id="stepper3trigger2"
                                        aria-controls="test-vl-2">
                                        <div class="bs-stepper-circle"><i class='bx bx-file fs-4'></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Processes</h5>
                                            <p class="mb-0 steper-sub-title">Processes Request</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="bs-stepper-content w-100">
                                <form id="myform" onSubmit="return false">
                                    <!-- Card of Basic Information of client -->
                                    <div id="test-vl-1" role="tabpane3" class="bs-stepper-pane content fade"
                                        aria-labelledby="stepper3trigger1">
                                        <h5 class="mb-4">Basic Information</h5>

                                        <div class="row g-3">
                                            <div class="col-sm-6 col-lg-6">
                                                <label for="input1" class="form-label">Client’s Name<span
                                                        class="requir-field">*</span></label>
                                                <input type="text" class="form-control" id="input1">
                                            </div>
                                            <div class="col-sm-6 col-lg-3">
                                                <label for="input2" class="form-label">Contract Date<span
                                                        class="requir-field">*</span></label>
                                                <input type="text" class="form-control datepicker"
                                                    placeholder="mm-dd-yyyy" />
                                            </div>
                                            <div class="col-sm-6 col-lg-3">
                                                <label for="input3" class="form-label">Client Status<span
                                                        class="requir-field">*</span></label>
                                                <select id="input7" class="form-select">
                                                    <option selected></option>
                                                    <option>active</option>
                                                    <option>inactive</option>
                                                    <option>transition</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input2" class="form-label">Go-live Date</label>
                                                <input type="text" class="form-control datepicker"
                                                    placeholder="mm-dd-yyyy" />
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input2" class="form-label">Termination Date</label>
                                                <input type="text" class="form-control datepicker"
                                                    placeholder="mm-dd-yyyy" />
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input2" class="form-label">Notice Date</label>
                                                <input type="text" class="form-control datepicker"
                                                    placeholder="mm-dd-yyyy" />
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input3" class="form-label">Type of Business<span
                                                        class="requir-field">*</span></label>
                                                <select id="input7" class="form-select">
                                                    <option selected></option>
                                                    <option>payer</option>
                                                    <option>provider</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input1" class="form-label">Payment Terms</label>
                                                <select id="input7" class="form-select">
                                                    <option selected></option>
                                                    <option>15 days</option>
                                                    <option>30 days</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input2" class="form-label">Mode of Payment</label>
                                                <select id="input7" class="form-select">
                                                    <option selected></option>
                                                    <option>ACH</option>
                                                    <option>Wire transfer</option>
                                                    <option>Credit Card</option>
                                                    <option>Paper Check</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input3" class="form-label">Point of Contacts</label>
                                                <select id="input7" class="form-select">
                                                    <option selected></option>
                                                    <option>Finance</option>
                                                    <option>Operations</option>
                                                    <option>IT</option>
                                                    <option>Compliance</option>
                                                    <option>Business Development</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                                <label for="input3" class="form-label">Span Head</label>
                                                <select id="input7" class="form-select">
                                                    <option selected></option>
                                                    <option>Span Head 1</option>
                                                    <option>Span Head 2</option>
                                                    <option>Span Head 3</option>
                                                    <option>Span Head 4</option>
                                                    <option>Span Head 5</option>
                                                </select>
                                            </div>


                                        </div>
                                        <!---end row-->
                                    </div>


                                    <!-- Card of Process of client -->
                                    <div id="test-vl-2" role="tabpane3" class="bs-stepper-pane content fade"
                                        aria-labelledby="stepper3trigger2">

                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                            <h5 class="card-title">Process</h5>
                                            <a href="" type="button" class="btn btn-primary px-md-4 ms-auto"
                                                data-bs-toggle="modal" data-bs-target="#exampleScrollableModal">Add a
                                                Process</a>

                                            <!-- Add more proccess Modal start -->
                                            <div class="modal fade" id="exampleScrollableModal" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Add Process</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3">
                                                                <div class="col-12">
                                                                    <h6 class="mb-4">Basic Information of
                                                                        Process</h6>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input1"
                                                                                class="form-label">Process
                                                                                Name<span
                                                                                    class="requir-field">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                id="input1">
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input3"
                                                                                class="form-label">Process
                                                                                Status<span
                                                                                    class="requir-field">*</span></label>
                                                                            <select id="input7" class="form-select">
                                                                                <option selected></option>
                                                                                <option>active</option>
                                                                                <option>inactive</option>
                                                                                <option>transition</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Contract
                                                                                Date<span
                                                                                    class="requir-field">*</span></label>
                                                                            <input type="text"
                                                                                class="form-control datepicker"
                                                                                placeholder="mm-dd-yyyy" />
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Go-live
                                                                                Date</label>
                                                                            <input type="text"
                                                                                class="form-control datepicker"
                                                                                placeholder="mm-dd-yyyy" />
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Termination
                                                                                date</label>
                                                                            <input type="text"
                                                                                class="form-control datepicker"
                                                                                placeholder="mm-dd-yyyy" />
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input3" class="form-label">Type
                                                                                of
                                                                                Process<span
                                                                                    class="requir-field">*</span></label>
                                                                            <select id="input7" class="form-select">
                                                                                <option selected></option>
                                                                                <option>DME</option>
                                                                                <option>payment posting</option>
                                                                                <option>AR</option>
                                                                                <option>authorization</option>
                                                                                <option>collections</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <hr class="my-4" />
                                                                    <h6 class="mb-4">Number of
                                                                        requested/estimated employees
                                                                        needed</h6>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Managers<span
                                                                                    class="requir-field">*</span></label>
                                                                            <select class="form-select lookup"
                                                                                data-placeholder="">
                                                                                <option></option>
                                                                                <option>Reactive</option>
                                                                                <option>Solution</option>
                                                                                <option>Conglomeration</option>
                                                                                <option>Algoritm</option>
                                                                                <option>Holistic</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Billables<span
                                                                                    class="requir-field">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                id="input2">
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Buffers<span
                                                                                    class="requir-field">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                id="input2">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <hr class="my-4" />
                                                                    <h6 class="mb-4">Number of assigned
                                                                        employees</h6>
                                                                    <div class="row">
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Managers</label>
                                                                            <select class="form-select lookup"
                                                                                data-placeholder="">
                                                                                <option></option>
                                                                                <option>Reactive</option>
                                                                                <option>Solution</option>
                                                                                <option>Conglomeration</option>
                                                                                <option>Algoritm</option>
                                                                                <option>Holistic</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Billable
                                                                                Employees</label>
                                                                            <input type="text" class="form-control"
                                                                                id="input2">
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Buffer
                                                                                employees</label>
                                                                            <input type="text" class="form-control"
                                                                                id="input2">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <hr class="my-4" />
                                                                    <h6 class="mb-4">Contract</h6>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Type</label>
                                                                            <select id="input7" class="form-select">
                                                                                <option selected> Type</option>
                                                                                <option>FTE</option>
                                                                                <option>Transaction</option>
                                                                                <option>hourly based</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2" class="form-label">Rate
                                                                                (based
                                                                                on
                                                                                contract)<span
                                                                                    class="requir-field">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                id="input2">
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Overtime
                                                                                Rate</label>
                                                                            <input type="text" class="form-control"
                                                                                id="input2">
                                                                        </div>
                                                                        <div class="col-sm-6 col-lg-4">
                                                                            <label for="input2"
                                                                                class="form-label">Overtime
                                                                                Type</label>
                                                                            <select id="input7" class="form-select">
                                                                                <option selected></option>
                                                                                <option>Billable</option>
                                                                                <option>Non-Billable</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</a>
                                                            <a type="button" href="" class="btn btn-primary">Add
                                                                Process</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add more proccess Modal end -->

                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div
                                                            class="d-flex justify-content-between w-100 align-items-center">
                                                            <div>
                                                                <h6 class="mb-2">Process Name</h6>
                                                                <div class="d-flex Proccess-des">
                                                                    <p class="mb-0">Span Name :
                                                                        <span>Name</span>
                                                                    </p><span class="mx-2">|</span>
                                                                    <p class="mb-0">Client Name :
                                                                        <span>Name</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <a type="button" class="btn px-1 me-2 d-block"><i
                                                                    class="fadeIn animated bx bx-trash-alt mx-auto delete-proccess"></i></a>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <form class="row g-3">
                                                            <!-- Basic Information of Process -->
                                                            <div class="col-12">
                                                                <h6 class="mb-4">Basic Information of Process
                                                                </h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4 ">
                                                                        <label for="input1" class="form-label">Process
                                                                            Name<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input1">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4 ">
                                                                        <label for="input3" class="form-label">Process
                                                                            Status<span
                                                                                class="requir-field">*</span></label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>active</option>
                                                                            <option>inactive</option>
                                                                            <option>transition</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4 ">
                                                                        <label for="input2" class="form-label">Contract
                                                                            Date<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4 ">
                                                                        <label for="input2" class="form-label">Go-live
                                                                            Date</label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4 ">
                                                                        <label for="input2"
                                                                            class="form-label">Termination
                                                                            Date</label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4 ">
                                                                        <label for="input3" class="form-label">Type of
                                                                            Process<span
                                                                                class="requir-field">*</span></label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>DME</option>
                                                                            <option>payment posting</option>
                                                                            <option>AR</option>
                                                                            <option>authorization</option>
                                                                            <option>collections</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Number of requested/estimated employees needed -->
                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Number of requested/estimated
                                                                    employees
                                                                    needed</h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Managers<span
                                                                                class="requir-field">*</span></label>
                                                                        <select class="form-select lookup"
                                                                            data-placeholder="">
                                                                            <option></option>
                                                                            <option>Reactive</option>
                                                                            <option>Solution</option>
                                                                            <option>Conglomeration</option>
                                                                            <option>Algoritm</option>
                                                                            <option>Holistic</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Billables<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Buffers<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Number of assigned employees -->
                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Number of assigned employees
                                                                </h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Managers</label>
                                                                        <select class="form-select lookup"
                                                                            data-placeholder="">
                                                                            <option></option>
                                                                            <option>Reactive</option>
                                                                            <option>Solution</option>
                                                                            <option>Conglomeration</option>
                                                                            <option>Algoritm</option>
                                                                            <option>Holistic</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Billable
                                                                            Employees</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Buffer
                                                                            Employees</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Contract -->
                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Contract</h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Type</label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected> Type</option>
                                                                            <option>FTE</option>
                                                                            <option>Transaction</option>
                                                                            <option>hourly based</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Rate
                                                                            (based on
                                                                            contract)<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Overtime
                                                                            Rate</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Overtime
                                                                            Type</label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>Billable</option>
                                                                            <option>Non-Billable</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <div
                                                            class="d-flex justify-content-between w-100 align-items-center">
                                                            <div>
                                                                <h6 class="mb-2">Process Name</h6>
                                                                <div class="d-flex Proccess-des">
                                                                    <p class="mb-0">Span Name :
                                                                        <span>Name</span>
                                                                    </p><span class="mx-2">|</span>
                                                                    <p class="mb-0">Client Name :
                                                                        <span>Name</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <a type="button" class="btn px-1 me-2 d-block"><i
                                                                    class="fadeIn animated bx bx-trash-alt mx-auto delete-proccess"></i></a>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <form class="row g-3">
                                                            <div class="col-12">
                                                                <h6 class="mb-4">Basic Information of Process
                                                                </h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input1" class="form-label">Process
                                                                            Name<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input1">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input3" class="form-label">Process
                                                                            Status<span
                                                                                class="requir-field">*</span></label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>active</option>
                                                                            <option>inactive</option>
                                                                            <option>transition</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Contract
                                                                            Date<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Go-live
                                                                            Date</label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Termination
                                                                            Date</label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input3" class="form-label">Type of
                                                                            Process<span
                                                                                class="requir-field">*</span></label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>DME</option>
                                                                            <option>payment posting</option>
                                                                            <option>AR</option>
                                                                            <option>authorization</option>
                                                                            <option>collections</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Number of requested/estimated
                                                                    employees
                                                                    needed</h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Managers<span
                                                                                class="requir-field">*</span></label>
                                                                        <select class="form-select lookup"
                                                                            data-placeholder="">
                                                                            <option></option>
                                                                            <option>Reactive</option>
                                                                            <option>Solution</option>
                                                                            <option>Conglomeration</option>
                                                                            <option>Algoritm</option>
                                                                            <option>Holistic</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Billables<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Buffers<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Number of assigned employees
                                                                </h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Managers</label>
                                                                        <select class="form-select lookup"
                                                                            data-placeholder="">
                                                                            <option></option>
                                                                            <option>Reactive</option>
                                                                            <option>Solution</option>
                                                                            <option>Conglomeration</option>
                                                                            <option>Algoritm</option>
                                                                            <option>Holistic</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Billable
                                                                            Employees</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Buffer
                                                                            Employees</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Contract</h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Type</label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected> Type</option>
                                                                            <option>FTE</option>
                                                                            <option>Transaction</option>
                                                                            <option>hourly based</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Rate
                                                                            (based on
                                                                            contract)<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Overtime
                                                                            Rate</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Overtime
                                                                            Type</label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>Billable</option>
                                                                            <option>Non-Billable</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <div
                                                            class="d-flex justify-content-between w-100 align-items-center">
                                                            <div>
                                                                <h6 class="mb-2">Process Name</h6>
                                                                <div class="d-flex Proccess-des">
                                                                    <p class="mb-0">Span Name :
                                                                        <span>Name</span>
                                                                    </p><span class="mx-2">|</span>
                                                                    <p class="mb-0">Client Name :
                                                                        <span>Name</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <a type="button" class="btn px-1 me-2 d-block"><i
                                                                    class="fadeIn animated bx bx-trash-alt mx-auto delete-proccess"></i></a>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <form class="row g-3">
                                                            <div class="col-12">
                                                                <h6 class="mb-4">Basic Information of Process
                                                                </h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input1" class="form-label">Process
                                                                            Name<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input1">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input3" class="form-label">Process
                                                                            Status<span
                                                                                class="requir-field">*</span></label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>active</option>
                                                                            <option>inactive</option>
                                                                            <option>transition</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Contract
                                                                            Date<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Go-live
                                                                            Date</label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Termination
                                                                            Date</label>
                                                                        <input type="text"
                                                                            class="form-control datepicker"
                                                                            placeholder="mm-dd-yyyy" />
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input3" class="form-label">Type of
                                                                            Process<span
                                                                                class="requir-field">*</span></label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>DME</option>
                                                                            <option>payment posting</option>
                                                                            <option>AR</option>
                                                                            <option>authorization</option>
                                                                            <option>collections</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Number of requested/estimated
                                                                    employees
                                                                    needed</h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Managers<span
                                                                                class="requir-field">*</span></label>
                                                                        <select class="form-select lookup"
                                                                            data-placeholder="">
                                                                            <option></option>
                                                                            <option>Reactive</option>
                                                                            <option>Solution</option>
                                                                            <option>Conglomeration</option>
                                                                            <option>Algoritm</option>
                                                                            <option>Holistic</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Billables<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Buffers<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Number of assigned employees
                                                                </h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Managers</label>
                                                                        <select class="form-select lookup"
                                                                            data-placeholder="">
                                                                            <option></option>
                                                                            <option>Reactive</option>
                                                                            <option>Solution</option>
                                                                            <option>Conglomeration</option>
                                                                            <option>Algoritm</option>
                                                                            <option>Holistic</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Billable
                                                                            Employees</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Buffer
                                                                            Employees</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <hr class="my-4" />
                                                                <h6 class="mb-4">Contract</h6>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2"
                                                                            class="form-label">Type</label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected> Type</option>
                                                                            <option>FTE</option>
                                                                            <option>Transaction</option>
                                                                            <option>hourly based</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Rate
                                                                            (based on
                                                                            contract)<span
                                                                                class="requir-field">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Overtime
                                                                            Rate</label>
                                                                        <input type="text" class="form-control"
                                                                            id="input2">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4">
                                                                        <label for="input2" class="form-label">Overtime
                                                                            Type</label>
                                                                        <select id="input7" class="form-select">
                                                                            <option selected></option>
                                                                            <option>Billable</option>
                                                                            <option>Non-Billable</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!---end row-->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end stepper -->


                <!--Card of Page buttons -->
                <div class="card last-card">
                    <div class="card-body">
                        <div class="d-md-flex d-grid align-items-center gap-3 justify-content-end">
                            <button class="btn btn-outline-secondary y px-md-4">Cancel</button>
                            <button class="btn btn-secondary px-md-4" id="previous">Previous</button>
                            <button class="btn btn-primary px-md-4" id="next">Next</button>
                            <button class="btn btn-success px-md-4" id="submit">Submit</button>
                        </div>
                    </div>
                </div>

            </div>
      


        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->


        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <i class='bx bxs-up-arrow-alt'></i>
        </a>
        <!--End Back To Top Button-->

@endsection




@section('scripts')
    <script>
        //date-Picker
        $(".datepicker").flatpickr(
            {
                dateFormat: "m-d-Y",
            }
        );

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

        //field validation
        $(document).ready(function () {
            $("#myform").validate({
                rules: {
                    name: {
                        required: true,
                    },
                },
                messages: {
                    name: "Please enter your name",
                },

                showErrors: function (errorMap, errorList) {
                    this.defaultShowErrors();
                    console.log(errorList, errorMap);
                },
                submitHandler: function (form) {
                    // Form submission logic here
                    stepper3.next();
                },
            });
            $("#previous").on("click", function () {
                stepper3.previous();
            });
            $("#next").on("click", function () {
                // Form submission logic here
                stepper3.next();
            });
            $("#submit").on("click", function () {
                $("#myform").submit();
            });
        });
    </script>
    <script>
        $('#fancy-file-upload').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>
@endsection