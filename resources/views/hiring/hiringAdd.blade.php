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
                                <li class="breadcrumb-item" aria-current="page"><a href="./hiringList">Hiring
                                        List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Raise Hiring Request</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="card ">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Hiring Data</h5>
                        <form class="row g-3">
                            <!-- <div class="col-sm-6 col-lg-4">
                                <label for="input1" class="form-label">Source of Request</label>
                                <input type="text" class="form-control" id="input1">
                            </div> -->
                            <div class="col-sm-6">
                                <label for="input2" class="form-label">Profile Requested<span
                                        class="requir-field">*</span></label>
                                <input type="text" class="form-control" id="input2" name="ProfileRequested">
                            </div>
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <label for="input3" class="form-label">Span<span class="requir-field">*</span></label>
                                <select class="form-select lookup" data-placeholder="">
                                    <option></option>
                                    <option>Reactive</option>
                                    <option>Solution</option>
                                    <option>Conglomeration</option>
                                    <option>Algoritm</option>
                                    <option>Holistic</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <label for="input3" class="form-label">Client<span class="requir-field">*</span></label>
                                <select class="form-select lookup" data-placeholder="">
                                    <option></option>
                                    <option>Reactive</option>
                                    <option>Solution</option>
                                    <option>Conglomeration</option>
                                    <option>Algoritm</option>
                                    <option>Holistic</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <label for="input3" class="form-label">Proccess<span
                                        class="requir-field">*</span></label>
                                <select class="form-select lookup" data-placeholder="">
                                    <option></option>
                                    <option>Reactive</option>
                                    <option>Solution</option>
                                    <option>Conglomeration</option>
                                    <option>Algoritm</option>
                                    <option>Holistic</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <label for="input2" class="form-label">Billable Status<span
                                        class="requir-field">*</span></label>
                                <select class="form-select" data-placeholder="">
                                    <option></option>
                                    <option>billable</option>
                                    <option>buffer</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="input11" class="form-label">Note</label>
                                <textarea class="form-control" id="input11" rows="4"></textarea>
                            </div>

                            <!-- <div class="col-sm-6 col-lg-4">
                                <label for="input2" class="form-label">The Date Request Was Fulfilled</label>
                                <input type="text" class="form-control datepicker" placeholder="mm-dd-yyyy" />
                            </div> -->
                            <!-- <div class="col-sm-6 col-lg-4">
                                <label for="input3" class="form-label">Requested By<span
                                        class="requir-field">*</span></label>
                                <select id="input7" class="form-select">
                                    <option selected></option>
                                    <option>payer</option>
                                    <option>provider</option>
                                </select>
                            </div> -->

                        </form>
                    </div>
                </div>

                <div class="card last-card">
                    <div class="card-body">
                        <div class="d-md-flex d-grid align-items-center gap-3 justify-content-end">
                            <a type="button" class="btn btn-outline-secondary px-4" href="./clientList">Cancel</a>
                            <button type="button" class="btn btn-success px-4">Submit</button>
                        </div>
                    </div>
                </div>

            </div>
            <!--end page content -->
      

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

        // Datepicker
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
    </script>
@endsection