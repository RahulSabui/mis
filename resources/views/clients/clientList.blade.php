@extends('layouts.app')
@section('title', 'Client List')
@section('content')

            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-flex align-items-center">
                    <div class="d-sm-flex align-items-center">
                        <div class=" breadcrumb-title pe-sm-1">Client</div>
                        <div class="ps-sm-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Client List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <a href="{{url('/clientAdd')}}" type="button" class="btn btn-primary px-md-4 ms-auto">Add
                        Client</a>
                </div>
                <!--end breadcrumb-->

                <div class="card radius-10 table-card">
                    <div class="card-body">
                        <hr />
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Project</th>
                                        <th>Span</th>
                                        <th>Notice date</th>
                                        <th>Process</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Modify Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-1.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-2.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Active</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-3.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-4.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from John Roman</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Active</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-7.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-8.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Active</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-9.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-1.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-2.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Active</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-3.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-4.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from John Roman</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Active</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-7.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-8.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Active</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-9.png" class="rounded-circle"
                                                        width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>Process</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Inactive</span>
                                            </div>
                                        </td>
                                        <td>12-01-2020</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!--end row-->
            </div>
      
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>

        <!--End Back To Top Button-->


  @endsection
   @section('scripts')

    <script>

        // Open Search-List
        // function toggleSearchList() {
        //     var searchList = document.querySelector('.search-employee-list');
        //     searchList.classList.toggle('open');
        // }
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