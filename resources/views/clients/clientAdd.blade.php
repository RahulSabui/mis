<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>ClientAdd</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <a href="./index" class="d-flex align-items-center">
                    <div class="logo">
                        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    </div>
                    <div>
                        <h4 class="logo-text">Vision</h4>
                    </div>
                </a>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li><a href="./index">
                        <div class="parent-icon">⠙⠁
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">Reports</li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">⠑⠍
                        </div>
                        <div class="menu-title">Employees</div>
                    </a>
                    <ul>
                        <li> <a href="./activeEmployee"><i class='bx bx-radio-circle text-danger'></i>Active
                                Employees</a>
                        </li>
                        <li> <a href="./exEmployee"><i class='bx bx-radio-circle text-orange'></i>Ex-Employees</a>
                        </li>
                        <li> <a href="./hiredEmployee"><i class='bx bx-radio-circle text-warning'></i>Hired
                                Employees</a>
                        </li>
                        <li> <a href="./attritionPercentage"><i
                                    class='bx bx-radio-circle text-success'></i>Attrition
                            </a>
                        </li>
                        <li> <a href="./noticeEmployee"><i class='bx bx-radio-circle text-primary'></i>Employees on
                                Notice</a>
                        </li>
                        <li> <a href="./ijpEmployee"><i class='bx bx-radio-circle text-blue'></i>IJP</a>
                        </li>
                        <li> <a href="./demographics"><i
                                    class='bx bx-radio-circle text-purple'></i>Demographics</a>
                        </li>
                        <li> <a href="./workFrom"><i class='bx bx-radio-circle text-brown'></i>WFO / WFH </a>
                        </li>
                        <li> <a href="pip"><i class='bx bx-radio-circle text-dark'></i>PIP</a>
                        </li>
                    </ul>
                </li>
                <li class="mm-active">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            ⠉⠍
                        </div>
                        <div class="menu-title">Client</div>
                    </a>
                    <ul>
                        <li> <a href="./activeClients"><i class='bx bx-radio-circle text-danger'></i>Clients
                                Report</a>
                        </li>
                        <li> <a href="./activeProcesses"><i class='bx bx-radio-circle text-orange'></i>
                                Processes</a>
                        </li>
                        <li> <a href="./ClientsTransition"><i class='bx bx-radio-circle text-warning'></i>Clients
                                in
                                Transition</a>
                        </li>
                        <li> <a href="./ProcessesTransition"><i
                                    class='bx bx-radio-circle text-success'></i>Processes in
                                Transition</a>
                        </li>
                        <li> <a href="./assignedResources"><i class='bx bx-radio-circle text-primary'></i>Assigned
                                Resources</a>
                        </li>
                        <li> <a href="./clientsNotice"><i class='bx bx-radio-circle text-blue'></i>Clients Under
                                Notice</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-label">Management</li>
                <li>
                    <a href="./hiringList">
                        <div class="parent-icon">⠓⠍
                        </div>
                        <div class="menu-title">Hiring</div>
                    </a>
                </li>

            </ul>

            <!-- <div class="sidebar-footer">
				<p class="powerd-by">Powered by <a href="https://techwens.com/" target="_blank">Techwens</a> Private
					Limited</p>
				<p class="text-center">Copyright ©2023</p>
			</div> -->
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand gap-1 gap-md-3">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="position-relative w-100">
                        <div class="position-relative search-bar d-block">
                            <input class="form-control ps-4 ps-sm-5 pe-md-5 search" placeholder="Search Employee"
                                onclick="toggleSearchList()">
                            <span
                                class="position-absolute top-50 search-show ms-2 ms-sm-3 translate-middle-y start-0 top-50 fs-5"><i
                                    class='bx bx-search'></i></span>
                        </div>
                        <div class="search-employee-list">
                            <div class="search-list">
                                <div class="list-group">
                                    <a href="javascript:;"
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1">
                                        <div class="d-flex align-items-center">
                                            <div class="profile-img">
                                                <img src="assets/images/avatars/avatar-1.png" class="rounded-circle"
                                                    width="46" height="46" alt="" />
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:;"
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1">
                                        <div class="d-flex align-items-center">
                                            <div class="profile-img">
                                                <img src="assets/images/avatars/avatar-4.png" class="rounded-circle"
                                                    width="46" height="46" alt="" />
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:;"
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1">
                                        <div class="d-flex align-items-center">
                                            <div class="profile-img">
                                                <img src="assets/images/avatars/avatar-2.png" class="rounded-circle"
                                                    width="46" height="46" alt="" />
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:;"
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1">
                                        <div class="d-flex align-items-center">
                                            <div class="profile-img">
                                                <img src="assets/images/avatars/avatar-3.png" class="rounded-circle"
                                                    width="46" height="46" alt="" />
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:;"
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1">
                                        <div class="d-flex align-items-center">
                                            <div class="profile-img">
                                                <img src="assets/images/avatars/avatar-5.png" class="rounded-circle"
                                                    width="46" height="46" alt="" />
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center gap-1">

                            <li class="nav-item dropdown dropdown-app">
                                <div class="app-container p-2 my-2">
                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                    data-bs-toggle="dropdown"><span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notifications</p>
                                            <a href="./notification" class="msg-header-badge">View All</a>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson<span
                                                            class="msg-time float-end">5 sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger">dc
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">You have recived new orders</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-2.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Althea Cabardo <span
                                                            class="msg-time float-end">14
                                                            sec ago</span></h6>
                                                    <p class="msg-info">Many desktop publishing packages</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success">
                                                    <img src="assets/images/app/outlook.png" width="25"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Account Created<span
                                                            class="msg-time float-end">28 min
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully created new email</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-info text-info">Ss
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Product Approved <span
                                                            class="msg-time float-end">2 hrs ago</span>
                                                    </h6>
                                                    <p class="msg-info">Your new product has approved</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-4.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Katherine Pechon <span
                                                            class="msg-time float-end">15
                                                            min ago</span></h6>
                                                    <p class="msg-info">Making this the first true generator</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i
                                                        class='bx bx-check-square'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Your item is shipped <span
                                                            class="msg-time float-end">5 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully shipped your item</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary">
                                                    <img src="assets/images/app/github.png" width="25"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New 24 authors<span
                                                            class="msg-time float-end">1 day
                                                            ago</span></h6>
                                                    <p class="msg-info">24 new authors joined last week</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-8.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Peter Costanzo <span
                                                            class="msg-time float-end">6 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">It was popularised in the 1960s</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <div class="cart-product rounded-circle bg-light">
                                                        <img src="assets/images/products/02.png" class=""
                                                            alt="product image">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                    <p class="cart-product-price mb-0">1 X $29.00</p>
                                                </div>
                                                <div class="">
                                                    <p class="cart-price mb-0">$250</p>
                                                </div>
                                                <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown ps-2 ps-md-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                            <div class="user-info">
                                <p class="user-name mb-0">Pauline Seitz</p>
                                <p class="designattion mb-0">Web Designer</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-user fs-5"></i><span>Profile</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="./settings"><i
                                        class="bx bx-cog fs-5"></i><span>Settings</span></a>
                            </li>

                            <li><a class="dropdown-item d-flex align-items-center" href="./signin"><i
                                        class="bx bx-log-out-circle"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->


        <!--start page wrapper -->
        <div class="page-wrapper">
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
        </div>
        <!--end page wrapper -->


        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->


        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <i class='bx bxs-up-arrow-alt'></i>
        </a>
        <!--End Back To Top Button-->


    </div>
    <!--end wrapper-->






    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="assets/plugins/bs-stepper/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="assets/plugins/select2/js/select2-custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>\
    <script src="./assets/js/jquery.validate.js"></script>
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
</body>

</html>