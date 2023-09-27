@extends('layouts.app')
@section('title', 'Settings')
@section('content')
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-flex align-items-center">
                    <div class="d-sm-flex align-items-center">

                        <div class="ps-sm-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="./index"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="ms-auto d-flex align-items-center">

                        <a href="./index" type="button" class="btn btn-primary px-md-4 ">Back to
                            Dashboard</a>
                    </div>

                </div>
                <!--end breadcrumb-->

                <div class="row">
                    <div class="col-sm-6 col-md-4 col-xl-3 ">
                        <a href="./manageUser" class="card settings-card">
                            <div class="card-body">
                                <div class="settings-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125" x="0px" y="0px">
                                        <title>Asset 188</title>
                                        <g data-name="Layer 2">
                                            <g data-name="Layer 1">
                                                <path
                                                    d="M71.56,21.56c0,11.9-9.65,26.25-21.56,26.25S28.44,33.46,28.44,21.56a21.56,21.56,0,0,1,43.12,0Z" />
                                                <path
                                                    d="M90.92,83.94c0,17.57-11.07,16-40.92,16-31.23,0-40.92,1.54-40.92-16S32.43,52.12,50,52.12,90.92,66.36,90.92,83.94Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h5>Manage User</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 ">
                        <a href="./span" class="card settings-card">
                            <div class="card-body">
                                <div class="settings-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:serif="http://www.serif.com/" viewBox="0 0 48 60" version="1.1"
                                        xml:space="preserve" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"
                                        stroke-linejoin="round" stroke-miterlimit="2">
                                        <g>
                                            <path
                                                d="M0,47c0,0.552 0.448,1 1,1l10,0c0.552,0 1,-0.448 1,-1c0,-2.693 -2.634,-5 -6,-5c-3.366,0 -6,2.307 -6,5Zm36,0c0,0.552 0.448,1 1,1l10,0c0.552,0 1,-0.448 1,-1c0,-2.693 -2.634,-5 -6,-5c-3.366,0 -6,2.307 -6,5Zm-18,0c0,0.552 0.448,1 1,1l10,0c0.552,0 1,-0.448 1,-1c0,-2.693 -2.634,-5 -6,-5c-3.366,0 -6,2.307 -6,5Zm5,-43.955c-5.274,0.476 -9.479,4.681 -9.955,9.955l-2.045,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1l2.045,-0c0.476,5.274 4.681,9.479 9.955,9.955l-0,2.045l-17,0c-0.552,0 -1,0.448 -1,1l0,5.126c-1.724,0.445 -3,2.012 -3,3.874c0,2.208 1.792,4 4,4c2.208,-0 4,-1.792 4,-4c0,-1.862 -1.276,-3.429 -3,-3.874l0,-4.126l16,0l-0,4.126c-1.724,0.445 -3,2.012 -3,3.874c0,2.208 1.792,4 4,4c2.208,-0 4,-1.792 4,-4c0,-1.862 -1.276,-3.429 -3,-3.874l-0,-4.126l16,0l-0,4.126c-1.724,0.445 -3,2.012 -3,3.874c0,2.208 1.792,4 4,4c2.208,-0 4,-1.792 4,-4c0,-1.862 -1.276,-3.429 -3,-3.874l0,-5.126c0,-0.552 -0.448,-1 -1,-1l-17,0l-0,-2.045c5.274,-0.476 9.479,-4.681 9.955,-9.955l2.045,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-2.045,0c-0.476,-5.274 -4.681,-9.479 -9.955,-9.955l-0,-2.045c0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1l-0,2.045Zm-17,31.955c1.104,-0 2,0.896 2,2c0,1.104 -0.896,2 -2,2c-1.104,0 -2,-0.896 -2,-2c0,-1.104 0.896,-2 2,-2Zm36,-0c1.104,-0 2,0.896 2,2c0,1.104 -0.896,2 -2,2c-1.104,0 -2,-0.896 -2,-2c0,-1.104 0.896,-2 2,-2Zm-18,-0c1.104,-0 2,0.896 2,2c0,1.104 -0.896,2 -2,2c-1.104,0 -2,-0.896 -2,-2c0,-1.104 0.896,-2 2,-2Zm-0,-30c4.967,0 9,4.033 9,9c-0,4.967 -4.033,9 -9,9c-4.967,0 -9,-4.033 -9,-9c-0,-4.967 4.033,-9 9,-9Zm-0,2c-3.863,0 -7,3.137 -7,7c-0,3.863 3.137,7 7,7c3.863,0 7,-3.137 7,-7c-0,-3.863 -3.137,-7 -7,-7Zm-0,2c2.76,0 5,2.24 5,5c-0,2.76 -2.24,5 -5,5c-2.76,0 -5,-2.24 -5,-5c-0,-2.76 2.24,-5 5,-5Zm-0,2c-1.656,0 -3,1.344 -3,3c-0,1.656 1.344,3 3,3c1.656,0 3,-1.344 3,-3c-0,-1.656 -1.344,-3 -3,-3Z" />
                                        </g>
                                    </svg>
                                </div>
                                <h5>Configure Span</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 ">
                        <a href="" class="card settings-card">
                            <div class="card-body">
                                <div class="settings-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" x="0px" y="0px" viewBox="0 0 100 125"
                                        enable-background="new 0 0 100 100" xml:space="preserve">
                                        <g>

                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M68,84.5H17.7c-4.2,0-7.5-3.4-7.5-7.5V9.5c0-4.2,3.4-7.5,7.5-7.5H68c4.2,0,7.5,3.4,7.5,7.5v67.4      C75.5,81.1,72.1,84.5,68,84.5z M17.7,7.6c-1.1,0-2,0.9-2,2v67.4c0,1.1,0.9,2,2,2H68c1.1,0,2-0.9,2-2V9.5c0-1.1-0.9-2-2-2H17.7z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M82.3,98H32c-4.2,0-7.5-3.4-7.5-7.5c0-1.5,1.2-2.8,2.8-2.8c1.5,0,2.8,1.2,2.8,2.8c0,1.1,0.9,2,2,2h50.3c1.1,0,2-0.9,2-2      V23.1c0-1.1-0.9-2-2-2c-1.5,0-2.8-1.2-2.8-2.8s1.2-2.8,2.8-2.8c4.2,0,7.5,3.4,7.5,7.5v67.4C89.8,94.6,86.5,98,82.3,98z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M42.8,64.7c-11.8,0-21.4-9.6-21.4-21.4S31,21.8,42.8,21.8s21.4,9.6,21.4,21.4S54.7,64.7,42.8,64.7z M42.8,25.8      c-9.6,0-17.5,7.8-17.5,17.5s7.8,17.5,17.5,17.5c9.6,0,17.5-7.8,17.5-17.5S52.5,25.8,42.8,25.8z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M42.5,43.2H29.7c0,7.3,5.9,13.1,13.1,13.1S56,50.5,56,43.2s-5.9-13.1-13.1-13.1c-0.1,0-0.2,0-0.3,0V43.2z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h5>Bulk Operation</h5>
                            </div>
                        </a>
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


@endsection

  @section('scripts')

    <script>
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