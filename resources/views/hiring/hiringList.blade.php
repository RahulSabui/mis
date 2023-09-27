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
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>Client List</title>
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
                <li>
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
        <!--start header -->
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
                                                            class="msg-time float-end">2 hrs ago</span></h6>
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
                <div class="page-breadcrumb d-flex align-items-center">
                    <div class="d-sm-flex align-items-center">

                        <div class="ps-sm-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="./index"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Hiring Requests</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <a href="./hiringAdd" type="button" class="btn btn-primary px-md-4 ms-auto">Raise Hiring
                        Request</a>
                </div>
                <!--end breadcrumb-->

                <div class="card radius-10 table-card">
                    <div class="card-body">
                        <hr />
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Hiring Name</th>
                                        <th>Project</th>
                                        <th>Source of Request</th>
                                        <th>Request Date</th>
                                        <th>Request By</th>
                                        <th>Status</th>
                                        <th>Span</th>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
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
                                        <td>Henry</td>
                                        <td>20-03-2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!--end row-->
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>

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
    <!--app JS-->
    <script src="assets/js/app.js"></script>

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
</body>

</html>