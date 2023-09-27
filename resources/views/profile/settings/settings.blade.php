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
    <!-- <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />

    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>Settings</title>
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
                        <div class="search-employee-list dropdown-menu">
                            <div class="search-list">
                                <div class="list-group">
                                    <a href="javascript:;" class=" align-items-center d-flex gap-2 py-1 dropdown-item">
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
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
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
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
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
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
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
                                        class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
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




    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="assets/plugins/chartjs/js/chart.js"></script>
    <script src="assets/plugins/chartjs/js/chartjs-custom.js"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="assets/js/widgets.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="assets/plugins/select2/js/select2-custom.js"></script>
    <script src="assets/js/app.js"></script>

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
</body>

</html>